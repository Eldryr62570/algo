import random
#Exo 1 
a = 5
print(a)
#Exo 2 
a = 5
b = 7
print("Addition : "+str(a+b)) 
print("Soustraction : "+str(a-b))
print("Multiplication :"+str(a*b))
#Exo 3 
a ="blablalba"
print(a)
#Exo 4 
a="blablabal"
b = "lorem"
print(a+" "+b)
#Exo 5 
a= 5
b = 18
temp = 0
temp = a 
a = b 
b = temp 
print("a : "+str(a)+" b : "+str(b))
#Exo 6 
a = 20
b = 20

if a < b :
    print("B est plus grand")
elif a > b :
    print("A est plus grand")
else :
    print("A et b sont égaux")
#Exo 7 
def compare(a,b) :
    if a < b :
        print("B est plus grand")
    elif a > b :
        print("A est plus grand")
    else :
        print("A et b sont égaux")

compare(a,b)
#Exo 8 
print(random.randint(1,10))
#Exo 9 
for i in range(1,10):
    print(random.randint(1,10))
#Exo 10 
nombre = 0
while nombre < 90 :
    nombre = random.randint(1,100)
    print(nombre)
