import numpy as np
import cv2
# from tensorflow.keras.models import Sequential
# from tensorflow.keras.layers import Conv2D, MaxPooling2D, Flatten, Dense
import tensorflow
from tensorflow import keras
from keras.layers import Dense
from keras.models import Sequential, load_model
from keras.layers.convolutional import Conv2D
from keras.layers import MaxPooling2D
from keras.layers import Flatten
# Load the pre-trained model
model = Sequential([
    Conv2D(16, (3, 3), activation='relu', input_shape=(128, 128, 3)),
    MaxPooling2D((2, 2)),
    Conv2D(32, (3, 3), activation='relu'),
    MaxPooling2D((2, 2)),
    Flatten(),
    Dense(64, activation='relu'),
    Dense(3, activation='linear')
])
model.load_weights('model_weights.h5')

# Define a function to measure the length, width, and height of a room from an image
def measure_room():
    # Load and preprocess the image
    img = cv2.imread()
    img = cv2.resize(img, (128, 128))
    img = img.astype('float32') / 255.0
    img = np.expand_dims(img, axis=0)

    # Use the pre-trained model to predict the length, width, and height
    predictions = model.predict(img)[0]
    length, width, height = predictions

    # Return the length, width, and height as a dictionary
    return {'length': length, 'width': width, 'height': height}

# Test the function on a sample image
result = measure_room('sample.jpg')
print(result)
 