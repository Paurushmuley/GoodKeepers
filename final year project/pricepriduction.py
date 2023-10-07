import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import plotly.express as px
import plotly.graph_objects as go
from sklearn.model_selection import train_test_split
from keras.models import Sequential
from keras.layers import Dense, LSTM

data = pd.read_csv("House_Rent_Dataset.csv")
print(data.head())
print(data.isnull().sum())
print(data.describe())
print(f"Mean Rent: {data.Rent.mean()}")
print(f"Median Rent: {data.Rent.median()}")
print(f"Highest Rent: {data.Rent.max()}")
print(f"Lowest Rent: {data.Rent.min()}")
figure = px.bar(data, x=data["City"], y=data["Rent"], color=data["BHK"], title="Rent in Different Cities According to BHK")
figure.show()
figure = px.bar(data, x=data["City"], y=data["Rent"], color=data["Area Type"], title="Rent in Different Cities According to Area Type")
figure.show()
figure = px.bar(data, x=data["City"], y=data["Rent"], color=data["Furnishing Status"], title="Rent in Different Cities According to Furnishing Status")
figure.show()
figure = px.bar(data, x=data["City"], y=data["Rent"], color=data["Size"], title="Rent in Different Cities According to Size")
figure.show()
cities = data["City"].value_counts()
label = cities.index
counts = cities.values
colors = ['gold', 'lightgreen']

fig = go.Figure(data=[go.Pie(labels=label, values=counts, hole=0.5)])
fig.update_layout(title_text='Number of Houses Available for Rent')
fig.update_traces(hoverinfo='label+percent', textinfo='value', textfont_size=30,
                  marker=dict(colors=colors, line=dict(color='black', width=3)))
fig.show()
tenant = data["Tenant Preferred"].value_counts()
label = tenant.index
counts = tenant.values
colors = ['gold', 'lightgreen']

fig = go.Figure(data=[go.Pie(labels=label, values=counts, hole=0.5)])
fig.update_layout(title_text='Preference of Tenant in India')
fig.update_traces(hoverinfo='label+percent', textinfo='value', textfont_size=30,
                  marker=dict(colors=colors, line=dict(color='black', width=3)))
fig.show()
data["Area Type"] = data["Area Type"].map({"Super Area": 1, "Carpet Area": 2, "Built Area": 3})
data["City"] = data["City"].map({"Mumbai": 4000, "Chennai": 6000, "Bangalore": 5600, "Hyderabad": 5000, "Delhi": 1100, "Kolkata": 7000})
data["Tenant Preferred"] = data["Tenant Preferred"].map({"Bachelors/Family": 2, "Bachelors": 1, "Family": 3})
print(data.head())

x = data[["BHK", "Size", "Area Type", "City", "Furnishing Status", "Tenant Preferred", "Bathroom"]].values
y = data[["Rent"]].values

xtrain, xtest, ytrain, ytest = train_test_split(x, y, test_size=0.10, random_state=42)

xtrain = np.reshape(xtrain, (xtrain.shape[0], xtrain.shape[1]))
xtest = np.reshape(xtest, (xtest.shape[0], xtest.shape[1]))

model = Sequential()
model.add(Dense(128, activation='relu', input_shape=(xtrain.shape[1],)))
model.add(Dense(64, activation='relu'))
model.add(Dense(25, activation='relu'))
model.add(Dense(1))
model.summary()
model.compile(optimizer='adam', loss='mean_squared_error')
model.fit(xtrain, ytrain, batch_size=1, epochs=21)

print("Enter House Details to Predict Rent")
a = int(input("Number of BHK: "))
b = int(input("Size of the House: "))
c = int(input("Area Type (Super Area = 1, Carpet Area = 2, Built Area = 3): "))
d = int(input("Pin Code of the City: "))
g = int(input("Number of bathrooms: "))
features = np.array([[a, b, c, d, g]])
features = np.reshape(features, (features.shape[0], features.shape[1]))

print("Predicted House Price = ", model.predict(features))
