const express = require('express')
const server = express()
const port = 5000
const whatsappbot = require('./routes/whatsappBrowserAutomate.js');

server.get('/automate/browser/whatsbot', async (req, res) => {
      try {
        const screenshot = await whatsappbot();
        res.status(200).json({ screenshot, message: 'QR Code Created Successfully', status:true });
      } catch (error) {
        console.log('failed');
        res.status(400).json({ message: 'errror through',  status:false });
      }
     
  });

server.listen(port, () => {
  console.log(`Server is Running on Port No ${port}`);
})