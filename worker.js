export default {
  async fetch() {
    const callback =
      "jQuery3510" +
      Math.floor(Math.random() * 999999999999999999) +
      "_" +
      Date.now();

    return new Response(callback, {
      headers: {
        "Content-Type": "text/plain"
      }
    });
  }
}
