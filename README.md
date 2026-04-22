# Frontend Developer Test Task — Cinema Layout

## Project Description

This project is a test assignment for the **Frontend Developer position**.

The goal of the task was to implement the layout from a provided **Figma design** using **Laravel framework with Blade templates**.

The project represents a cinema website layout with movie cards, sessions, navigation, and responsive behavior.

---

# Technologies Used

* Laravel 12
* Blade Templates
* HTML5
* CSS3 (Flexbox + Grid)
* JavaScript (minimal usage)
* Docker
* Laravel Sail
* Git / GitHub

---

# Implemented Features

### Layout

The layout was implemented according to the Figma design.

Implemented sections:

* Header
* Cinema information bar
* Navigation menu
* Day filter
* Movies grid
* Movie cards
* Footer

---

### Movie Cards

Each card includes:

* Movie poster
* Age badge
* Premiere badge
* Movie title
* Genres
* Sessions list (time, format, price, hall)

Different card states were implemented:

* Movie with multiple sessions
* Movie with limited sessions
* Movie without poster (placeholder)
* Movie with "Sessions tomorrow" button

---

# Responsive Design

The mobile layout was implemented independently since it was not provided in the design.

Responsive behavior:

Desktop → 4 cards
Tablet → 3 cards
Mobile → 2 cards
Small screens → 1 card

---

# Project Structure

resources/views

layouts/
app.blade.php

components/
header.blade.php
movie-card.blade.php
footer.blade.php

pages/
home.blade.php

---

# Running the Project

Clone the repository:

git clone https://github.com/Nura1806toktar/komek-ticket.git

Go to the project directory:

cd komek-ticket

Install dependencies:

composer install

Start Docker containers with Sail:

./vendor/bin/sail up

Open in browser:

http://localhost

---

# Figma Design

Figma layout:

https://www.figma.com/design/MCNiSKbCdmN4su6OFNUNYd/Komek-By-Ticket

Background image:

https://drive.google.com/file/d/1ULDxghM21ACVBxvrySsafqc05U2YVE7j/view
