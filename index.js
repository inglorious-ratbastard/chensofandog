const express = require('express');
const path = require('path');

const app = express();

const port = parseInt(process.env.PORT) || process.argv[3] || 5000;

app.use(express.static(path.join(__dirname, 'public')))
  .set('views', path.join(__dirname, 'views'))
  .set('view engine', 'ejs');

app.get('/', (req, res) => {
  res.render('cover');
});

app.get('/chainsaw', (req, res) => {
  res.render('chainsaw');
});

app.get('*', (req, res) => {
  res.render('notFound');
});

app.listen(port, '0.0.0.0', () => {
  console.log(`Listening on http://0.0.0.0:${port}`);
})
