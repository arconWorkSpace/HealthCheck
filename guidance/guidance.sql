CREATE TABLE appointment_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    counselor VARCHAR(255),
    day VARCHAR(255),
    class VARCHAR(255),
    timing VARCHAR(255),
    checkup_for VARCHAR(255)
);
CREATE TABLE availability (
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    Monday_timeIn TIME,
    Monday_timeOut TIME,
    Tuesday_timeIn TIME,
    Tuesday_timeOut TIME,
    Wednesday_timeIn TIME,
    Wednesday_timeOut TIME,
    Thursday_timeIn TIME,
    Thursday_timeOut TIME,
    Friday_timeIn TIME,
    Friday_timeOut TIME,
    PRIMARY KEY (email)
);

CREATE TABLE history_appointment_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    historyid INT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    counselor VARCHAR(255),
    day VARCHAR(255),
    class VARCHAR(255),
    timing VARCHAR(255),
    checkup_for VARCHAR(255),
    feedback TEXT
);

CREATE TABLE resource (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(255) NOT NULL,
    Description TEXT
);

CREATE TABLE user (
    appointmentid INT,
    username VARCHAR(255),
    email VARCHAR(255),
    usertype VARCHAR(50),
    password VARCHAR(255)
);