import sys
import google.generativeai as genai

# Configure Gemini
API_KEY = "AIzaSyBQD2yWHS3b5vAIpI8QIwYu4fg93m9Dd5k"
genai.configure(api_key=API_KEY)

def analyze_sentiment(text):
    model = genai.GenerativeModel("gemini-pro")
    prompt = f"""
    Analyze this text and return ONLY one of these words:
    joy, sadness, anger, fear, surprise, disgust, neutral
    Text: "{text}"
    """
    response = model.generate_content(prompt)
    return response.text.strip().lower()

if __name__ == "__main__":
    try:
        text = sys.argv[1] if len(sys.argv) > 1 else sys.stdin.read()
        if not text.strip():
            print("ERROR: No text provided", file=sys.stderr)
            sys.exit(1)
            
        result = analyze_sentiment(text)
        print(result)
        
    except Exception as e:
        print(f"ERROR: {str(e)}", file=sys.stderr)
        sys.exit(1)