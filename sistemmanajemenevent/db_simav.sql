CREATE TABLE events (
    id_events VARCHAR(3) PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    event_date DATETIME NOT NULL,
    location VARCHAR(255) NOT NULL
);

CREATE TABLE participants (
    id_participants VARCHAR(3) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE event_participants (
    event_id VARCHAR(3),
    participant_id VARCHAR(3),
    PRIMARY KEY (event_id, participant_id),
    FOREIGN KEY (event_id) REFERENCES events(id_events),
    FOREIGN KEY (participant_id) REFERENCES participants(id_participants)
);