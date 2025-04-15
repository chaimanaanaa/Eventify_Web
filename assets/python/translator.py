import sys
from deep_translator import GoogleTranslator

def traduire_texte(texte, langue_dest='fr'):
    try:
        traduction = GoogleTranslator(source='auto', target=langue_dest).translate(texte)
        return traduction
    except Exception as e:
        return f"Erreur: {str(e)}"

if __name__ == "__main__":
    if len(sys.argv) < 3:
        print(sys.argv[1])  # Retourne l'original si erreur
    else:
        texte = sys.argv[1]
        langue_dest = sys.argv[2]
        print(traduire_texte(texte, langue_dest))