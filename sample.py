import cv2
import numpy as np
import matplotlib.pyplot as plt
import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="goodskeepers"
)


mycursor2 = mydb.cursor()

mycursor2.execute("SELECT fileNamedrop FROM imgmatching WHERE userName ='demo11'")

myresult = mycursor2.fetchall()
res = myresult[::-1]
x1 = str(res[0])
y1 = x1.replace("'", "", 2)
y1 = y1.replace("(", "", 1)
y1 = y1.replace(",)", "", 1)
mycursor = mydb.cursor()

mycursor.execute("SELECT fileNamepick FROM imgmatching WHERE userName ='demo11'")

myresult = mycursor.fetchall()
res = myresult[::-1]
x = str(res[0])
y = x.replace("'", "", 2)
y = y.replace("(", "", 1)
y = y.replace(",)", "", 1)


def calculate_image_diff(image1, image2):
    gray1 = cv2.cvtColor(image1, cv2.COLOR_BGR2GRAY)
    gray2 = cv2.cvtColor(image2, cv2.COLOR_BGR2GRAY)
    diff = cv2.absdiff(gray1, gray2)
    _, threshold = cv2.threshold(diff, 30, 255, cv2.THRESH_BINARY)
    contours, _ = cv2.findContours(threshold, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
    return diff, contours


def is_object_damaged(raw_image, damaged_image):
    diff, contours = calculate_image_diff(raw_image, damaged_image)

    if len(contours) > 0:
        return True, diff, contours

    return False, diff, []


# Load the raw image of the object
raw_image = cv2.imread('uploads/pick/' + y)

# Load the damaged image of the object
damaged_image = cv2.imread('uploads/Timg/' + y1)

# Check if the object is damaged
object_damaged, diff, contours = is_object_damaged(raw_image, damaged_image)

if object_damaged:
    mycursor = mydb.cursor()

    sql = "UPDATE imgmatching SET Decision = 'The Object is Damaged.' WHERE fileNamepick='%s'" % y

    mycursor.execute(sql)

    mydb.commit()
    print("Damaged")
else:
    mycursor = mydb.cursor()

    sql = "UPDATE imgmatching SET Decision = 'The Object is Not Damaged.' WHERE userName = 'demo11'"

    mycursor.execute(sql)

    mydb.commit()
    print("Not Damaged")

# Visualize the image difference
plt.imshow(diff, cmap='gray')
plt.title("Image Difference")
plt.axis('off')


# Visualize the detected contours
contour_img = cv2.drawContours(damaged_image.copy(), contours, -1, (0, 0, 255), 2)
plt.imshow(cv2.cvtColor(contour_img, cv2.COLOR_BGR2RGB))
plt.title("Detected Contours")
plt.axis('off')

