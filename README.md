# 🎉 Eventify

_Eventify is a robust event management platform designed to streamline the organization of events such as weddings, birthdays, graduations, and more._

✨ It includes:
- A **web app** built with Symfony
- A **desktop app** in Java
- A **backend & frontend** powered by FastAPI

🔧 It uses cutting-edge tech: **Three.js**, **Gemini AI**, **T5-base**, and more.
🧩 All components support full **CRUD** (Create, Read, Update, Delete) operations.

---

## 📚 Table of Contents

- [🎯 Features](#-features)
  - [👤 User Management](#-user-management)
  - [📅 Event Management](#-event-management)
  - [💬 Forums](#-forums)
  - [🧠 Organizer Recommendations](#-organizer-recommendations)
  - [📢 Reclamation System](#-reclamation-system)
  - [🛒 Logistics & Marketplace](#-logistics--marketplace)
- [🛠 Technologies](#-technologies)
- [📦 Installation](#-installation)
- [🚀 Usage](#-usage)
- [🤝 Contributing](#-contributing)
- [📝 License](#-license)
- [📬 Contact](#-contact)

---

## 🎯 Features

### 👤 User Management
- ✅ **CRUD Operations** for users  
- 📸 Real-time photo capture using **MediaDevices**
- 🔐 Login via **facial recognition (FastAPI.js)** or email/password
- 🛠 Profile edit & delete
- 📊 Admin dashboard with **AJAX search**, filter, Excel export
- 🛡 Security: **Unauthorized access alert via photo to email**

### 📅 Event Management
- ✅ **Full CRUD** for events
- 📝 Custom event types, dates, details
- 🧩 **3D Room Setup** with drag-drop via **Three.js**
- 🤖 **Chatbot assistant** to guide event creation
- 📄 **PDF preview** of setups
- 🗓 **FullCalendar** for reservations
- 💰 Real-time **TND/EUR** price estimation
- ✅ **Admin approval system**

### 💬 Forums
- ✅ **CRUD** for posts, comments (including anonymous)
- ❤️ Emojis for reactions
- 🧠 Sentiment analysis via **Gemini AI**
- 🚫 Bad word filter (**Pergomalum API**)
- 🎙 Speech-to-text via **WebkitSpeech**
- 💡 **Autocomplete** from Datamuse API
- 🌍 Translate via **DeepTranslator**, keep **edit history**

### 🧠 Organizer Recommendations
- ✅ **CRUD** for organizer records
- 🧠 Smart assignment via **Gemini AI**
- 📊 Event data extracted via **InfraDeep AI**
- 🗣 Voice assistant helps in organizer selection
- 🔮 Offer prediction
- 🕵 Anonymous feedback
- 🌤 Weather forecast using **Open Meteo API**

### 📢 Reclamation System
- ✅ **CRUD** for user complaints
- 🧾 Summarized issues via **T5-base**
- 🖼 Event visuals via **Gemini API + BLIP**

### 🛒 Logistics & Marketplace
- ✅ **CRUD** for products & orders
- 📦 Product listings + real-time IP Webcam preview
- 🎤 Voice search via **WebkitVoice**
- 📍 View location with **Leaflet** & **OpenStreetMap**
- 💳 Checkout with **Stripe** or COD
- ⭐ Favorite & filter products
- 🧾 **Receipts**: QR Code or PDF
- 📊 Admin daily Excel export

---

## 🛠 Technologies

- **Data Storage**: SQL
- **Backend**: Symfony (PHP), FastAPI (Python), Uvicorn
- **Frontend**: HTML, CSS, JS, AJAX, Three.js, FullCalendar
- **Desktop App**: Java
- **AI/ML**: Gemini AI, T5-base, BLIP, InfraDeep
- **APIs**: Open Meteo, Pergomalum, Datamuse, DeepTranslator
- **Maps**: Leaflet, OpenStreetMap
- **Payments**: Stripe
- **Other**: WebkitSpeech, MediaDevices, IP Webcam

---

## 📦 Installation

### Prerequisites
- ✅ PHP >= 8.0  
- ✅ Composer  
- ✅ Node.js >= 16  
- ✅ Python >= 3.8  
- ✅ Java >= 17  
- ✅ MySQL  
- ✅ FastAPI, Uvicorn  
- ✅ Stripe account

---

## 🚀 Usage

### 🌐 Web Application
1. Open [http://localhost:8000](http://localhost:8000)
2. Create account or log in with face/email
3. Use dashboard to manage everything

### 💻 Desktop Application
1. Launch the Java desktop app
2. Log in using the same credentials
3. Access features offline

### 🌟 Key Highlights
- 🧩 3D Room Planner  
- 🤖 Organizer AI Assistant  
- 💬 Community Forum  
- 🛒 Marketplace management  

---

## 🤝 Contributing

### 🐛 Reporting Issues
- Use GitHub Issues for bugs or feature requests  
- Include steps and screenshots if possible

### 🧑‍💻 Code Contributions
- Fork → New Branch → Pull Request  
- Follow code style & docs conventions

### 📏 Dev Guidelines
- Clean, documented code  
- Include tests for new features  
- Keep documentation up to date

### 💬 Community Support
- Help others in Discussions  
- Improve docs/tutorials  
- Share your usage of Eventify  

---

## 📝 License

Licensed under the **MIT License**

---

## 📬 Contact

For questions or partnerships:
- 📧 Email: `eventify@gmail.com`  
- 🐙 GitHub: [https://github.com/si-war/eventify](https://github.com/si-war/eventify)

### 👥 Project Team:
- 👤 User Mgmt: bouslimi.nourelhouda@esprit.tn  
- 📦 Logistics: siwarchayada@esprit.tn  
- 💬 Forums: eya.ounich@esprit.tn  
- 📅 Events: farah.benchikha@esprit.tn  
- 📢 Reclamations: khalil.benchaabane@esprit.tn  
- 🧠 Organizer & Offers: chaima.naanaa@esprit.tn  

🔗 Join the forum and connect with the community!
