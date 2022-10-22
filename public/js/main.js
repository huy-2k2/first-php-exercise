const inputs_total = document.querySelectorAll(".cart-total input");

async function handle_submit_data(data, url) {
  let formBody = [];
  for (const property in data) {
    const encodedKey = encodeURIComponent(property);
    const encodedValue = encodeURIComponent(data[property]);
    formBody.push(encodedKey + "=" + encodedValue);
  }
  formBody = formBody.join("&");
  const response = await fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: formBody,
  });
  return response.json();
}

inputs_total.forEach((input_total, index) => {
  input_total.onchange = async function (e) {
    console.log(index);
    const response = await handle_submit_data(
      {
        total: e.target.value,
        product_id: e.target.getAttribute("data-id"),
      },
      "module/cart/update.php"
    );
    document.querySelector(".cart-money").innerText =
      "Tổng tiền: " +
      Intl.NumberFormat("en-US").format(response["total_money_all"]) +
      "đ";
    document.querySelectorAll(".cart-cost")[index].innerText =
      Intl.NumberFormat("en-US").format(response["total_money_product"]) + "đ";
    document.querySelector(".header-cart-num").innerText =
      response["total_cart"];
  };
});
