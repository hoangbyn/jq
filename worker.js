export default {
  async fetch(request) {
    const callback =
      "jQuery3510" +
      Math.floor(Math.random() * 999999999999999999) +
      "_" +
      Date.now();

    const html = `<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Generated Callback</title>
</head>
<body>
<pre>${callback}</pre>
</body>
</html>`;

    return new Response(html, {
      headers: {
        "Content-Type": "text/html; charset=utf-8",
        "Cache-Control": "no-store, no-cache, must-revalidate, max-age=0"
      }
    });
  }
};
