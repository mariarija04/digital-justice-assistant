const mongoose = require('mongoose');

const userSchema = new mongoose.Schema({
    username: {
        type: String,
        required: true
    },
    password: {
        type: String,
        required: true
    },
    email: {
        type: String,
        required: true
    },
    userType: {
        type: String,
        enum: ['advocate', 'general'],
        required: true
    },
    phone: {
        type: String,
        required: true
    },
    registrationNumber: {
        type: String
    }
});

const User = mongoose.model('User', userSchema);

module.exports = User;
