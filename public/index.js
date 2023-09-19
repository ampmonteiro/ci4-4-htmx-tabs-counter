const btns = document.querySelectorAll('button');

btns.forEach((el, i) => {
  el.addEventListener('click', getTab.bind(null, i + 1));
});


async function getTab(tabIndex) {
  try {
    const rs = await fetch(`/tab/${tabIndex}`,
      {
        method: "get",
        headers: {
          "X-Requested-With": "XMLHttpRequest"
        }
      });

    if (!rs.ok) {
      const message = `An error has occured: ${response.status}`;
      throw new Error(message);
    }

    const ht = await rs.text();

    if (ht.includes('404')) {

      throw new Error(ht);
    }

    document.querySelector('section').innerHTML = ht;

  } catch (error) {
    console.log(error);
  }

}