const express = require('express');
const path = require('path');

const app = express();

const port = parseInt(process.env.PORT) || process.argv[3] || 8080;

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

app.listen(port, () => {
  console.log(`Listening on http://localhost:${port}`);
})
