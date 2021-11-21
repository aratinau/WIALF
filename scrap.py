from bs4 import BeutifulSoup
import requests
import time

print('Put some skill that you are not familiar with')
unfamiliar_skill = input('>')
print(f'Filtering out {unfamiliar_skill}')

def find_jobs():
	html_text = requests.get('https://www.pap.fr/annonce/locations-appartement-paris-75-g439-2-pieces')
	soup = BeutifulSoup(html_text, 'lxml')
	
