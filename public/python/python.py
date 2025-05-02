# public/python/python.py
import sys
from deep_translator import GoogleTranslator

def traduire_texte(texte, langue_dest='fr'):
    try:
        # Décoder les arguments en UTF-8, en veillant à ce qu'ils soient bien formatés
        texte = texte.encode('utf-8').decode('utf-8')
        
        # Traduction via Google Translator
        traduction = GoogleTranslator(source='auto', target=langue_dest).translate(texte)
        return traduction
    except Exception as e:
        return f"Erreur dans la traduction: {str(e)}"

# Fonction principale qui accepte des arguments
if __name__ == "__main__":
    texte = sys.argv[1]  # Texte à traduire (premier argument)
    langue_dest = sys.argv[2]  # Langue de destination (deuxième argument)
    print(traduire_texte(texte, langue_dest))  # Afficher la traduction
