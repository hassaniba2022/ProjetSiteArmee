const Model = require('../model/model');
const express = require('express');
const router = express.Router();


router.post('/post', async (req, res) => {
    const citydata = new Model({
        latitude: req.body.latitude,
        longitude: req.body.longitude,
        generationtime_ms: req.body.generationtime_ms,
        utc_offset_seconds: req.body.utc_offset_seconds,
        timezone: req.body.timezone,
        timezone_abbreviation: req.body.timezone_abbreviation,
        elevation: req.body.elevation,
        hourly_units: {
            time: req.body.hourly_units.time,
            temperature_2m: req.body.hourly_units.temperature_2m
        },
        hourly: {
            time: req.body.hourly.time,
            temperature_2m: req.body.hourly.temperature_2m
        }
    })

    try {
        const dataToSave = await citydata.save();
        console.log('je suis le serveur',dataToSave)
        res.status(200).json(dataToSave)
    }
    catch (error) {
        res.status(400).json({message: error.message})
    }
})

module.exports = router;