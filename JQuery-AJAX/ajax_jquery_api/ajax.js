$(window).on("load", function () {
  $("#getDataBtn").on("click", function () {
    $.ajax({
      url: "https://jsonplaceholder.typicode.com/users", //API URL
      type: "GET", // GET OR POST,
      beforeSend: function () {
        // This function calls before ajax API Hits
        // Here we have to show our loader
        $(".loader-row").removeClass("d-none");
      },
      success: function (response, status) {
        // Once our API call send success
        // this function gets called.
        $(".loader-row").addClass("d-none");
        let html = "";
        for (let i = 0; i < response.length; i++) {
          const { id, name, email, website } = response[i];
          html += `
                        <tr>
                            <td>${id}</td>
                            <td>${name}</td>
                            <td>${email}</td>
                                <td>${website}</td>
                        </tr>
                    `;
        }
        $(".user-table").find("tbody").append(html);
      },
      error: function (error, status) {
        // IF our API get any error
        // this function gets called.
        $(".loader-row").addClass("d-none");
        let html = `
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-danger">
                                    Error while fetching data
                                </div>
                            </td>
                        </tr>
                    `;
        $(".user-table").find("tbody").append(html);
      },
    });
  });
});
