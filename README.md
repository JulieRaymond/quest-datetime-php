# quest-datetime-php

Challenge
Doc et Marty partent en voyage
C'est l'heure de voyager dans le temps. Doc et Marty montent dans la Delorean. Il faut configurer la date actuelle et la date de destination. La machine a besoin de connaître la durée qui sépare ces deux dates pour ajuster la quantité de carburant nécessaire. Attention, la moindre erreur pourrait rompre le continuum espace-temps !

Crée deux variables $presentTime et $destinationTime, qui seront des objets DateTime. $presentTime devra correspondre à la date actuelle (le moment du départ) et $destinationTime la date et heure de destination, choisis celle que tu veux.

Affiche ensuite ces deux dates en suivant exactement le format de l'image ci-dessous
![image](https://github.com/JulieRaymond/quest-datetime-php/assets/122172605/6536b6d7-9b9b-492d-98de-e8f4a57f64cc)


Tu n'es pas obligé de suivre le style (mais si tu veux faire un peu de CSS, rien ne t'en empêche), par contre il faut bien afficher, dans cet ordre, le mois, le jour, l'année, le moment de la journée (AM ou PM), l'heure et les minutes.



3. Affiche ensuite la durée qui sépare ces deux dates et formate le résultat pour qu'il affiche le nombre d'années, mois, jours, heures et minutes entre les deux dates.

[BONUS] : Calcule ensuite ce même intervalle, mais cette fois ci uniquement en nombre de minutes séparant les deux dates. Toutes les 10000 minutes, le réservoir a besoin d'un litre de carburant. Affiche donc le nombre de litres de carburant nécessaire pour effectuer ce trajet temporel. 

Critères de validation
Deux objets DateTime sont instanciés
Les deux dates ("present time" et "destination time") sont affichées et correctement formatées. Si en plus il y a du CSS qui reproduit l'affichage du convertisseur spatio-temporel, tu peux chaleureusement féliciter ton camarade dans tes commentaires ;-) )
L'intervalle de temps entre les deux dates est affiché et correctement formaté.
[BONUS] : La quantité de carburant nécessaire au trajet s'affiche. N'hésite pas à modifier $destinationTime pour vérifier que les données se mettent correctement à jour.
