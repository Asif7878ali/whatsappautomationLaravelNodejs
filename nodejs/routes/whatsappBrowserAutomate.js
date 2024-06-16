const puppeteer = require('puppeteer-extra')
const StealthPlugin = require('puppeteer-extra-plugin-stealth')

puppeteer.use(StealthPlugin())

async function  whatsappbot(){
      try {
          const browserLaunch = await puppeteer.launch();       
          const page = await browserLaunch.newPage();
          await page.goto('https://web.whatsapp.com/');
          await page.waitForSelector('canvas');
          const qrCodeElement = await page.$('canvas');
          const qrCodeBoundingBox = await qrCodeElement.boundingBox();
          const screenshot = await page.screenshot({
              clip: {
                 x: qrCodeBoundingBox.x,
                 y: qrCodeBoundingBox.y,
                 width: qrCodeBoundingBox.width,
                 height: qrCodeBoundingBox.height
              },
                 type: 'jpeg'
           });
         await browserLaunch.close();
         const base64Screenshot = screenshot.toString('base64');
         return base64Screenshot;
      } catch (error) {
          console.log('error is', error);
   }
}
 
module.exports = whatsappbot;