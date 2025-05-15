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

![Capture d'écran 2025-05-15 023505](https://github.com/user-attachments/assets/b1576b98-d52f-4061-aa9b-5f348ed4d2c9)
![Capture d'écran 2025-05-15 023550](https://github.com/user-attachments/assets/ecc91041-6b80-41c1-a53c-274ed965576d)

![Capture d'écran 2025-05-15 023904](https://github.com/user-attachments/assets/c8a69b69-3f5a-40e8-9ea7-e450ba524e2a)


- ✅ **CRUD Operations** for users  
- 📸 Real-time photo capture using **MediaDevices**
- 🔐 Login via **facial recognition (FastAPI.js)** or email/password
- 🛠 Profile edit & delete
- 📊 Admin dashboard with **AJAX search**, filter, Excel export
- 🛡 Security: **Unauthorized access alert via photo to email**

### 📅 Event Management


![Capture d'écran 2025-05-15 023639](https://github.com/user-attachments/assets/9c53a051-da0e-42f1-9366-703314843b21)
![Capture d'écran 2025-05-15 032024](https://github.com/user-attachments/assets/4e0d5581-94f9-49bc-9e26-1686eb81fb8c)


![Capture d'écran 2025-05-15 032114](https://github.com/user-attachments/assets/c2a1c6b1-8be7-486d-8a25-9c5ee81d8386)

![Capture d'écran 2025-05-15 032251](https://github.com/user-attachments/assets/3e93f777-9cc6-43c7-8450-d2e99d3c3f92)


- ✅ **Full CRUD** for events

- 📝 Custom event types, dates, details
- 🧩 **3D Room Setup** with drag-drop via **Three.js**
- 🤖 **Chatbot assistant** to guide event creation
- 📄 **PDF preview** of setups
- 🗓 **FullCalendar** for reservations
- 💰 Real-time **TND/EUR** price estimation
- ✅ **Admin approval system**

### 💬 Forums


![Capture d'écran 2025-05-15 023658](https://github.com/user-attachments/assets/eb95818f-a5a5-4389-823e-02c747320c86)


![Capture d'écran 2025-05-15 032323](https://github.com/user-attachments/assets/b07a5767-2ba1-4b18-b131-5f876399cc38)


- ✅ **CRUD** for posts, comments (including anonymous)
- ❤️ Emojis for reactions
- 🧠 Sentiment analysis via **Gemini AI**
- 🚫 Bad word filter (**Pergomalum API**)
- 🎙 Speech-to-text via **WebkitSpeech**
- 💡 **Autocomplete** from Datamuse API
- 🌍 Translate via **DeepTranslator**, keep **edit history**

### 🧠 Organizer Recommendations


![Capture d'écran 2025-05-15 023806](https://github.com/user-attachments/assets/fb64d6cc-dbad-4dbb-866c-dca80c46c642)

![Capture d'écran 2025-05-15 032406](https://github.com/user-attachments/assets/62b91a98-decb-4463-9f2c-57cf32c06335)

- ✅ **CRUD** for organizer records
- 🧠 Smart assignment via **Gemini AI**
- 📊 Event data extracted via **InfraDeep AI**
- 🗣 Voice assistant helps in organizer selection
- 🔮 Offer prediction
- 🕵 Anonymous feedback
- 🌤 Weather forecast using **Open Meteo API**

### 📢 Reclamation System


![Capture d'écran 2025-05-15 023722](https://github.com/user-attachments/assets/5ab27e5a-3177-41aa-af9f-ee5e81442d20)


![Capture d'écran 2025-05-15 032339](https://github.com/user-attachments/assets/ed8d3442-976a-4933-b48d-5cd475c5c936)


- ✅ **CRUD** for user complaints
- 🧾 Summarized issues via **T5-base**
- 🖼 Event visuals via **Gemini API + BLIP**

### 🛒 Logistics & Marketplace


![Capture d'écran 2025-05-15 023827](https://github.com/user-attachments/assets/3bc31ce3-6aa1-4f8e-8bb1-288ec9a1f05b)

![Capture d'écran 2025-05-15 032446](https://github.com/user-attachments/assets/fdf2e0e1-25f6-4d2f-93ce-402cb22ffd98)

![Capture d'écran 2025-05-15 032510](https://github.com/user-attachments/assets/87eac786-d71b-40fa-b8f5-1033d5b41ab7)

![Capture d'écran 2025-05-15 032547](https://github.com/user-attachments/assets/64941e1b-2490-466c-ba25-7b2a21a0104f)



- ✅ **CRUD** for products & orders
- 📦 Product listings 
-  real-time IP Webcam preview
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
- -  real-time IP Webcam preview

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
- 📧 Email: `eventify11@yahoo.com`  
- Facebook :
![496510515_547067088227474_2767002007671711219_n](https://github.com/user-attachments/assets/a40f3c59-df1b-4d3b-8beb-c33b20970cb7)

### 👥 Project Team:
- 👤 User Mgmt: bouslimi.nourelhouda@esprit.tn  
- 📦 Logistics: siwarchayada@esprit.tn  
- 💬 Forums: eya.ounich@esprit.tn  
- 📅 Events: farah.benchikha@esprit.tn  
- 📢 Reclamations: khalil.benchaabane@esprit.tn  
- 🧠 Organizer & Offers: chaima.naanaa@esprit.tn  

🔗 Join the forum and connect with the community!
