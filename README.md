```markdown
# Penyewaan Hotel

Penyewaan Hotel is a web-based application designed to manage hotel reservations, customer details, and room availability. This project aims to provide an easy-to-use platform for both hotel management and customers to book and manage reservations effectively.

## Features

- **Customer Management**: Add, update, and view customer profiles.
- **Room Availability**: View available rooms in real-time and their status (booked/available).
- **Booking System**: Allow customers to book rooms with specified dates and preferences.
- **Admin Panel**: Admins can manage bookings, view reports, and update hotel information.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript, React.js
- **Backend**: Node.js, Express.js
- **Database**: MongoDB
- **Authentication**: JWT (JSON Web Token)
- **Other Tools**: Git, GitHub, Heroku (for deployment)

## Installation

To run this project locally, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/LorentzaZweena/penyewaan-hotel.git
   ```

2. **Navigate to the project folder**:
   ```bash
   cd penyewaan-hotel
   ```

3. **Install dependencies for both frontend and backend**:

   - For the frontend:
     ```bash
     cd client
     npm install
     ```

   - For the backend:
     ```bash
     cd server
     npm install
     ```

4. **Create a `.env` file in the `server` folder** and add the following environment variables:
   ```env
   MONGO_URI=your_mongo_database_uri
   JWT_SECRET=your_secret_key
   ```

5. **Run the project**:

   - Start the backend server:
     ```bash
     cd server
     npm start
     ```

   - Start the frontend development server:
     ```bash
     cd client
     npm start
     ```

   The app will be available at `http://localhost:3000`.

## Usage

- Visit the frontend interface where users can view available rooms, make bookings, and manage their reservations.
- Admins can log in and manage bookings, rooms, and customer information from the admin panel.

## Contributing

We welcome contributions! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to your forked repository (`git push origin feature-branch`).
5. Open a pull request to the main repository.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [React.js](https://reactjs.org/)
- [Node.js](https://nodejs.org/)
- [MongoDB](https://www.mongodb.com/)
- [Express.js](https://expressjs.com/)

For more information or support, feel free to open an issue or contact the project maintainers.

```
