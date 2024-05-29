## About This API

When accessed via Herd at localhost:8000/fox, this code will do an HTTP GET to "https://randomfox.ca/floof/" to fetch a random image of a fox. This will be displayed to the user.

Next, an HTTP POST is made to a mock endpoint at "calldrip.free.beeceptor.com/fox". The body of the POST is a JSON chunk containing the fox image url, and a link to the hosting page.
