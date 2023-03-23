// Require the necessary modules
const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const io = require('socket.io')(server);

// Serve static files from the "public" directory
app.use(express.static('public'));

// Handle incoming connections
io.on('connection', (socket) => {
  console.log('A user connected');

  // Listen for incoming chat messages
  socket.on('chat message', (msg) => {
    console.log(`Received message: ${msg}`);
    // Broadcast the message to all connected clients
    io.emit('chat message', msg);
  });

  // Handle disconnections
  socket.on('disconnect', () => {
    console.log('A user disconnected');
  });
});

// Start the server
const PORT = process.env.PORT || 3000;
server.listen(PORT, () => {
  console.log(`Server started on port ${PORT}`);
});
