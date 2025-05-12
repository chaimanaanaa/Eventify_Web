# Eventify

Eventify is a robust event management platform designed to streamline the organization of events such as weddings, birthdays, graduations, and more. It includes a web application built with Symfony, a desktop application developed in Java, and a feature-rich backend ,frontend powered by FastAPI. Eventify leverages cutting-edge technologies like Three.js, Gemini AI, and T5-base to deliver an interactive, secure, and intelligent event planning experience. All major components support full CRUD (Create, Read, Update, Delete) operations for seamless data management.

## Table of Contents
- [Features](#features)
- [Technologies](#technologies)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## Features

### User Management
- **CRUD Operations**: Full create, read, update, and delete functionality for user accounts.
- **Account Creation**: Users can create accounts with real-time image capture via MediaDevices and auto-generated passwords.
- **Authentication**: Secure login using facial recognition (FastAPI.js) or email/password with pre-filled email.
- **Profile Management**: Users can edit or delete their profiles.
- **Admin Dashboard**: Admins can view user statistics, perform dynamic searches with AJAX, filter data, and export to Excel.
- **Security**: After three incorrect password attempts, a photo of the unauthorized user is emailed to the account owner.

### Event Management
- **CRUD Operations**: Complete create, read, update, and delete functionality for events.
- **Custom Event Creation**: Users can define event types (e.g., weddings, birthdays), dates, times, and details.
- **3D Virtual Room Setup**: Interactive 3D event space visualization with Three.js, featuring drag-and-drop for furniture and decorations.
- **Chatbot Assistant**: Guides users through event creation with relevant questions.
- **PDF Preview**: Generate a PDF of the event setup for planning.
- **Interactive Calendar**: Built with FullCalendar for viewing, managing, and reserving events with advanced filtering.
- **Price Estimation**: Real-time cost estimates in TND and EUR using a currency exchange rate API.
- **Event Approval**: Admins can approve or reject event requests based on availability.

### Forums
- **CRUD Operations**: Full create, read, update, and delete functionality for posts and comments, including anonymous posts.
- **Post Creation**: Users can share event experiences; others can like, dislike, or comment with emojis.
- **Sentiment Analysis**: Comments analyzed for sentiment using Gemini AI.
- **Bad Word Filtering**: Inappropriate content filtered with Pergomalum API.
- **Speech-to-Text**: Comment input via WebkitSpeech for speech-to-text.
- **Autocomplete**: Comment suggestions powered by Datamuse API.
- **Translation & History**: Posts and comments support translation via DeepTranslator and maintain a history log.

### Organizer Recommendations
- **CRUD Operations**: Create, read, update, and delete functionality for organizer assignments and recommendations.
- **Intelligent Assignment**: Organizers recommended to clients using Gemini AI based on event needs.
- **Data Extraction**: Extract event data with InfraDeep AI.
- **Voice Assistant**: AI-powered voice assistant aids clients in selecting organizers.
- **Offer Prediction**: Clients view the likelihood of offer acceptance/rejection.
- **Anonymous Feedback**: Clients can submit anonymous feedback about organizers.
- **Event Date Weather**: Check weather forecasts for event dates using Open Meteo API before submitting offers.

### Reclamation System
- **CRUD Operations**: Create, read, update, and delete functionality for user complaints.
- **Issue Reporting**: Complaints summarized using T5-base for admin review.
- **Event Generation**: Generate event visuals with Gemini API and BLIP for image-based event creation.

### Logistics & Marketplace
- **CRUD Operations**: Full create, read, update, and delete functionality for products and transactions.
- **Product Listings**: Users can add products for sale or purchase from the marketplace.
- **Voice Search**: Search products with WebkitVoice Recognition.
- **Geolocation**: View product locations using Leaflet and OpenStreetMap.
- **Live Product View**: Real-time previews via IP Webcam.
- **Checkout**: Payments via Stripe or cash on delivery.
- **Favorites & Filters**: Add products to favorites and filter by price or type.
- **Receipts**: Generate receipts as QR codes or PDFs.
- **Admin Logistics**: Admins can manage logistics, filter transactions, and export daily reports to Excel.

---

## Technologies
-**Data Storage**:SQL: For data storage and management-
-**Backend**: Symfony (PHP), FastAPI (Python), Uvicorn server
- **Frontend**: HTML, CSS, JavaScript, AJAX, Three.js, FullCalendar
- **Desktop App**: Java
- **AI/ML**: Gemini AI, T5-base, BLIP, InfraDeep
- **APIs**: Open Meteo, Pergomalum, Datamuse, DeepTranslator, Currency Exchange Rate API
- **Maps**: Leaflet, OpenStreetMap
- **Payments**: Stripe
- **Other**: WebkitSpeech, MediaDevices, IP Webcam

---

## Installation

### Prerequisites
- PHP >= 8.0
- Composer
- Node.js >= 16
- Python >= 3.8
- Java >= 17
- MySQL or another compatible database
- FastAPI and Uvicorn
- Stripe account for payments


**Clone the Repository**
   ```bash
   git clone https://github.com/si-war/eventify.git


** License **
Distributed under the MIT License. See LICENSE for more information.

**Contact**
Project Team - contact@eventify.com
Project Link: https://github.com/si-war/eventify

