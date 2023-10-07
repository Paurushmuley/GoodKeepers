import numpy as np
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, Dropout
from tensorflow.keras.optimizers import RMSprop
from tensorflow.keras.datasets import mnist
import matplotlib.pyplot as plt
from sklearn import metrics
print(data.isnull().sum())
print(data.describe())
print(f"Mean Rent: {data.Expected_Rent.mean()}")
print(f"Median Rent: {data.Expected_Rent.median()}")
print(f"Highest Rent: {data.Expected_Rent.max()}")
print(f"Lowest Rent: {data.Expected_Rent.min()}")
figure = px.bar(data, x=data["city"], 
                y = data["noRooms"], 
                color = data["propertyType"],
            title="Rent in Different Cities According to Area Type")
figure.show()
figure = px.bar(data, x=data["city"], 
                y = data["Expected_Rent"], 
                color = data["sqFeet"],
            title="Rent in Different Cities According to Size")
figure.show()
cities = data["city"].value_counts()
label = cities.index
counts = cities.values
colors = ['gold','lightgreen']

fig = go.Figure(data=[go.Pie(labels=label, values=counts, hole=0.5)])
fig.update_layout(title_text='Number of Houses Available for Rent')
fig.update_traces(hoverinfo='label+percent', textinfo='value', textfont_size=30,
                  marker=dict(colors=colors, line=dict(color='black', width=3)))
fig.show()
data["propertyType"] = data["propertyType"].map({"Super Area": 1, 
                                           "Carpet Area": 2, 
                                           "Built Area": 3})
data["city"] = data["city"].map({"Mumbai": 4000, "Chennai": 6000, 
                                 "Bangalore": 5600, "Hyderabad": 5000, 
                                 "Delhi": 1100, "Kolkata": 7000})
data["Furnishing Status"] = data["Furnishing Status"].map({"Unfurnished": 0, 
                                                           "Semi-Furnished": 1, 
                                                           "Furnished": 2})
data["Tenant Preferred"] = data["Tenant Preferred"].map({"Bachelors/Family": 2, 
                                                         "Bachelors": 1, 
                                                         "Family": 3})
from sklearn.model_selection import train_test_split
x = np.array(data[["noRooms", "sqFeet",  
                   "propertyType","Bathroom"]])
y = np.array(data[["Expected_Rent"]])

xtrain, xtest, ytrain, ytest = train_test_split(x, y, 
                                                test_size=0.10, 
                                                random_state=42)
from keras.models import Sequential
from keras.layers import Dense, LSTM
model = Sequential()
model.add(LSTM(128, return_sequences=True, 
               input_shape= (xtrain.shape[1], 1)))
model.add(LSTM(64, return_sequences=False))
model.add(Dense(25))
model.add(Dense(1))
model.summary()
from sklearn.tree import DecisionTreeRegressor
from sklearn.metrics import r2_score
clf = DecisionTreeRegressor()
clf.fit(x,y)
ypred = clf.predict(xtest)
r2_score(ytest, ypred)
model.compile(optimizer='adam', loss='mean_squared_error')
model.fit(xtrain, ytrain, batch_size=1, epochs=22)
print("Enter House Details to Predict Rent")
a = int(input("Number of rooms: "))
b = int(input("Size of the House: "))
c = int(input("Area Type (Super Area = 1, Carpet Area = 2, Built Area = 3): "))
#d = int(input("Pin Code of the City: "))
g = int(input("Number of bathrooms: "))
features = np.array([[a, b, c,g]])
print("Predicted House Price = ", model.predict(features))



