export default {
  async fetch(request, env, ctx) {
    const callback =
      "jQuery3510" +
      Math.floor(Math.random() * 999999999999999999) +
      "_" +
      Date.now();

    const url =
      "https://example.com/test?callback=" +
      encodeURIComponent(callback);

    const html = `<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JSONP URL Generator</title>
</head>
<body>

<h3>Callback:</h3>
<pre>${callback}</pre>

<h3>Full URL:</h3>
<pre>${url}</pre>

</body>
</html>`;

    return new Response(html, {
      headers: {
        "Content-Type": "text/html; charset=utf-8",
        "Cache-Control": "no-store"
      }
    });
  }
};
