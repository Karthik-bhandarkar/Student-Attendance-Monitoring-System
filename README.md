# Student Attendance Monitoring System 🎓

<p align="center">
  <img src="https://img.shields.io/badge/Status-Active-brightgreen?style=for-the-badge" alt="Status">
  <img src="https://img.shields.io/github/license/Karthik-bhandarkar/Student-Attendance-Monitoring-System?style=for-the-badge&color=blue" alt="License">
  <img src="https://img.shields.io/github/last-commit/Karthik-bhandarkar/Student-Attendance-Monitoring-System?style=for-the-badge&color=informational" alt="Last Commit">
</p>

<p align="center">
  A modern, web-based solution to automate and streamline the process of tracking student attendance in educational institutions.
</p>

<p align="center">
  <a href="#-about-the-project">About</a> •
  <a href="#-key-features">Features</a> •
  <a href="#-tech-stack">Tech Stack</a> •
  <a href="#-getting-started">Getting Started</a> •
  <a href="#-usage">Usage</a> •
  <a href="#-contributing">Contributing</a>
</p>

---

## 🌟 About The Project



The **Student Attendance Monitoring System** is a robust application designed to replace traditional, manual attendance tracking with an efficient, reliable, and centralized digital system. It provides distinct portals for Admins and Teachers, ensuring seamless data management and accessibility. This project aims to reduce administrative overhead, minimize human error, and provide real-time insights into student attendance.

Built with a modern, decoupled architecture, this system is scalable, easy to deploy, and ideal for schools, colleges, and other educational centers.

---

## ✨ Key Features

* **🔐 Role-Based Authentication:** Secure login and dedicated dashboards for Admins and Teachers.
* **✅ Effortless Attendance Marking:** Intuitive interface for faculty to mark students as present, absent, or excused per session.
* **📊 Dynamic Reporting:** Generate and export daily, weekly, or monthly attendance reports in **CSV / PDF** formats.
* **👤 Roster Management:** Easily add, edit, and import student rosters from a CSV file.
* **🔔 Optional Notifications:** Configure automated email or SMS reminders for attendance-related events.
* **📜 Audit Logs:** Track all changes made to attendance records for full transparency and accountability.

---

## 🛠️ Tech Stack

This project is built with a modern, decoupled architecture.

* **Backend:** *(e.g., Node.js + Express | Django | Flask)*
* **Frontend:** *(e.g., React | Vue.js | Angular)*
* **Database:** *(e.g., PostgreSQL | MySQL | SQLite)*
* **Deployment:** **Docker**, Nginx

---

## 🚀 Getting Started

Follow these instructions to get a local copy of the project up and running for development and testing.

### Prerequisites

* **Git** for version control.
* **Docker** and **Docker Compose** for containerization.
* *(Manual Setup Only)* **Node.js** / **Python** / etc. and a **Database Server** (like PostgreSQL/MySQL).

### Installation

The recommended way to run this project is with Docker.

<details>
<summary><strong>🐳 Option A: Run with Docker (Recommended)</strong></summary>

1.  **Clone the Repository**
    ```sh
    git clone [https://github.com/Karthik-bhandarkar/Student-Attendance-Monitoring-System.git](https://github.com/Karthik-bhandarkar/Student-Attendance-Monitoring-System.git)
    cd Student-Attendance-Monitoring-System
    ```
2.  **Configure Environment Variables**
    Create a `.env` file from the example and customize it with your keys and settings.
    ```sh
    cp .env.example .env
    ```
3.  **Build and Run the Containers**
    This command will build the images and start all the services in the background.
    ```sh
    docker-compose up -d --build
    ```
4.  **Run Database Migrations & Seeding**
    Execute the following commands to set up the database schema and populate it with initial data.
    ```sh
    docker-compose exec backend <your-migration-command>  # e.g., npm run migrate
    docker-compose exec backend <your-seed-command>      # e.g., npm run seed
    ```
5.  **Access the Application**
    * **Frontend:** `http://localhost:3000`
    * **Backend API:** `http://localhost:8000/api`

</details>

<details>
<summary><strong>💻 Option B: Run Manually on Local Machine</strong></summary>

1.  **Clone the Repository**
    ```sh
    git clone [https://github.com/Karthik-bhandarkar/Student-Attendance-Monitoring-System.git](https://github.com/Karthik-bhandarkar/Student-Attendance-Monitoring-System.git)
    cd Student-Attendance-Monitoring-System
    ```
2.  **Setup Backend**
    * Navigate to the backend directory: `cd backend`
    * Create and configure your `.env` file: `cp .env.example .env`
    * Install dependencies: `<your-install-command>` (e.g., `npm install`)
    * Run migrations and seeds: `<your-migration-and-seed-commands>`
    * Start the server: `<your-start-command>` (e.g., `npm run dev`)

3.  **Setup Frontend**
    * Navigate to the frontend directory: `cd ../frontend`
    * Install dependencies: `npm install`
    * Start the development server: `npm start`

4.  **Access the Application**
    * The frontend will be available at `http://localhost:3000`.

</details>

---

## 📖 Usage

Once the application is running, you can interact with it via the Web UI or the REST API.

* **Login** as an Admin or Teacher to access the dashboard.
* **Create** classes and add students to the roster.
* **Mark attendance** for a session by selecting the status for each student.
* **Generate reports** from the reports tab and export them as needed.

<details>
<summary><strong>▶️ View API Usage Examples</strong></summary>

-   **Authenticate**
    ```bash
    curl -X POST http://localhost:8000/api/auth/login \
      -H "Content-Type: application/json" \
      -d '{"email":"teacher@example.com","password":"password"}'
    ```
-   **Mark Attendance**
    ```bash
    curl -X POST http://localhost:8000/api/sessions/456/attendance \
      -H "Authorization: Bearer <YOUR_JWT_TOKEN>" \
      -H "Content-Type: application/json" \
      -d '{"student_id":789,"status":"present"}'
    ```

</details>

---

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

---

## 📜 License

Distributed under the MIT License. See `LICENSE` file for more information.

---

## 📬 Contact

**Karthik Bhandarkar**

* **GitHub:** [@Karthik-bhandarkar](https://github.com/Karthik-bhandarkar)
* **LinkedIn:** [linkedin.com/in/karthik-bhandarkar](https://www.linkedin.com/in/karthik-bhandarkar)
* **Email:** [karthikbhandarkar2004@gmail.com](mailto:karthikbhandarkar2004@gmail.com)

Project Link: [https://github.com/Karthik-bhandarkar/Student-Attendance-Monitoring-System](https://github.com/Karthik-bhandarkar/Student-Attendance-Monitoring-System)
