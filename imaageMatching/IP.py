import numpy as np
import cv2
import matplotlib.pyplot as plt

bg=cv2.imread('room.jpg')
bg=cv2.cvtColor(bg,cv2.COLOR_BGR2RGB)
plt.imshow(bg)
bg.shape
face=cv2.imread('window.jpg')
face=cv2.cvtColor(face,cv2.COLOR_BGR2RGB)
plt.imshow(face)
face.shape
face.shape
height,width,channels=face.shape
methods=['cv2.TM_CCOEFF','cv2.TM_CCOEFF_NORMED','cv2.TM_CCORR','cv2.TM_CCORR_NORMED','cv2.TM_SQDIFF','cv2.TM_SQDIFF_NORMED']
for x in methods:
  bg_copy=bg.copy()
  method=eval(x)
  result=cv2.matchTemplate(bg_copy,face,method)
  min_val,max_val,min_loc,max_loc=cv2.minMaxLoc(result)
  if method in[cv2.TM_SQDIFF,cv2.TM_SQDIFF_NORMED]:
    top_left=min_loc
  else:
    top_left=max_loc
  bottom_right=(top_left[0]+width,top_left[1]+height)
  cv2.rectangle(bg_copy,top_left,bottom_right,255,10)
  plt.subplot(121)
  plt.imshow(result)
  plt.title('Result of template matching')
  plt.subplot(122)
  plt.imshow(bg_copy)
  plt.title('Match point')
  plt.suptitle(x)
  plt.show()


