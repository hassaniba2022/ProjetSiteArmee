const mongoose = require('mongoose');

const citySchema = new mongoose.Schema({
    latitude: {
        required: true,
        type: Number
    },
    longitude: {
        required: true,
        type: Number
    },
    generationtime_ms: {
        required: true,
        type: Number
    },
    utc_offset_seconds: {
        required: true,
        type: Number
    }, 
    timezone: {
        required: true,
        type: String
    },
    timezone_abbreviation: {
        required: true,
        type: String
    },
    elevation: {
        required: true,
        type: Number
    },
    hourly_units: {
      time: {
        required: true,
        type: String
      },
      temperature_2m: {
        required: true,
        type: String
      }
    },
    hourly: {
      time: {
        required: true,
        type: [String]
      },
      temperature_2m: {
        required: true,
        type: [Number]
      }
    }
})

module.exports = mongoose.model('Data', citySchema)