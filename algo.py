import random
from datetime import datetime
import re
# # Exo 1
# a = 5
# print(a)
# # Exo 2
# a = 5
# b = 7
# print("Addition : "+str(a+b))
# print("Soustraction : "+str(a-b))
# print("Multiplication :"+str(a*b))
# # Exo 3
# a = "blablalba"
# print(a)
# # Exo 4
# a = "blablabal"
# b = "lorem"
# print(a+" "+b)
# # Exo 5
# a = 5
# b = 18
# temp = 0
# temp = a
# a = b
# b = temp
# print("a : "+str(a)+" b : "+str(b))
# # Exo 6
# a = 20
# b = 20

# if a < b:
#     print("B est plus grand")
# elif a > b:
#     print("A est plus grand")
# else:
#     print("A et b sont égaux")
# # Exo 7


# def compare(a, b):
#     if a < b:
#         print("B est plus grand")
#     elif a > b:
#         print("A est plus grand")
#     else:
#         print("A et b sont égaux")


# compare(a, b)
# # Exo 8
# print(random.randint(1, 10))
# # Exo 9
# for i in range(1, 10):
#     print(random.randint(1, 10))
# # Exo 10
# nombre = 0
# while nombre < 90:
#     nombre = random.randint(1, 100)
#     print(nombre)

# # Exo 11
# a = input("Entrez votre nombre : ")
# print("Votre nombre est :"+str(a))
# # Exo 12
# modulo = int(a) / 2


# def isPair(a):
#     if modulo == 0:
#         return True
#     else:
#         return False


# monNombre = input("Entrez votre nombre : ")
# if(isPair(monNombre)):
#     print("Le nombre "+str(monNombre)+" est pair")
# else:
#     print("Le nombre "+str(monNombre) + " est impair")
# # Exo 13
# a = int(input("Entez votre nombre (vérif) : "))
# print(a)

# # Exo 14
# annee = int(input("Entrez l annee a verifier:"))


def isBissextile(annee):
    if(annee % 4 == 0 and annee % 100 != 0 or annee % 400 == 0):
        return True
    else:
        return False


# Exo 15
jour = int(input("Entrez le jour : (entre 1 et 31) "))
mois = int(input("Entrez le mois (entre 1 et 12) : "))
annee = int(input("Entrez l'annee"))


def dateIsValid(annee, mois, jour):
    fevrier = 29 if(isBissextile(annee)) else 28
    jour_dans_le_mois = {
        1: 31,
        2: fevrier,
        3: 31,
        4: 30,
        5: 31,
        6: 30,
        7: 31,
        8: 31,
        9: 30,
        10: 31,
        11: 30,
        12: 31
    }
    if 1 <= mois <= 12 and 1 <= jour <= jour_dans_le_mois[mois]:
        return True
    else:
        return False


if dateIsValid(annee, mois, jour):
    print("Votre date est valide")
else:
    print("Votre année est invalide")
