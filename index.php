export default {
  async fetch() {

    const callback =
      "jQuery3510" +
      Math.floor(Math.random() * 999999999999999999) +
      "_" +
      Date.now();

    return new Response(`
<!DOCTYPE html>
<html>
<body>
<pre>${callback}</pre>
</body>
</html>
`, {
      headers: {
        "Content-Type": "text/html;charset=UTF-8",
        "Cache-Control": "no-store"
      }
    });
  }
}
