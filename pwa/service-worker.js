const cacheName = 'meine-pwa-cache';
const filesToCache = [

];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName)
      .then(function(cache) {
        return cache.addAll(filesToCache);
      })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        if (response) {
          return response;
        }
        return fetch(event.request);
      })
  );
});











//Benachrichtigung

// Anforderung der Push-Benachrichtigungsberechtigung
function requestNotificationPermission() {
  Notification.requestPermission().then(permission => {
    if (permission === 'granted') {
      console.log('Benachrichtigungsberechtigung erteilt');
    } else {
      console.warn('Benachrichtigungsberechtigung nicht erteilt');
    }
  });
}

// Zeitplan für das Senden der Push-Benachrichtigung jeden Abend um 19 Uhr
function scheduleNotification() {
  const now = new Date();
  const notificationTime = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 0, 28, 0);
  const timeUntilNotification = notificationTime.getTime() - now.getTime();

  if (timeUntilNotification < 0) {
    // Wenn die aktuelle Uhrzeit bereits nach 19 Uhr ist, wird die Push-Benachrichtigung für den nächsten Tag geplant
    notificationTime.setDate(notificationTime.getDate() + 1);
    timeUntilNotification = notificationTime.getTime() - now.getTime();
  }

  setTimeout(() => {
    sendNotification();
    scheduleNotification();
  }, timeUntilNotification);
}

// Funktion zum Senden der Push-Benachrichtigung
function sendNotification() {
  const notificationTitle = 'Zeit für KinderNews!';
  const notificationOptions = {
    body: 'Es reich mit TikTok! Zeit für die neusten KinderNews!',
    icon: '/img/app.png',
    vibrate: [200, 100, 200, 100, 200, 100, 200]
  };
  self.registration.showNotification(notificationTitle, notificationOptions);
}

// Aufruf der Funktionen zum Anfordern der Benachrichtigungsberechtigung und zum Planen der Push-Benachrichtigung
requestNotificationPermission();
scheduleNotification();