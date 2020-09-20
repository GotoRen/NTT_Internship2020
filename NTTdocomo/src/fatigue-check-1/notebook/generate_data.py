import pandas as pd
import numpy as np

df = pd.DataFrame([])
temper = np.random.normal(36.5, 0.3, 1000)
df["temper"] = temper
iphone = np.random.normal(8, 1.0, 1000)
df["iphone"] = iphone
blood_oxy = np.random.normal(98, 0.3, 1000)
df["blood_oxy"] = blood_oxy
heartbeat = np.random.normal(75, 20, 1000) 
num_step = np.random.normal(6000, 1000, 1000)
df["num_step"] = num_step
df["heartbeat"] = heartbeat


_id = []
for i in range(10):
    _id+=[i]*100
days = []
for j in range(10):
    days+=[i for i in range(100)]
    
df["id"] = _id
df["days"] = days
df["fatigue"] = np.sqrt(df["temper"]) * np.sqrt(df["iphone"])* heartbeat**2/10**4* df["heartbeat"]/1000


#df
#df.to_csv("../data/ori_data.csv")