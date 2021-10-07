<script>
    function getNames() {
        showSwal("{{ __('Yükleniyor...') }}", 'info');
        let data = new FormData();

        request("{{ API('get_guzzletestnames') }}", data, function(response) {
            response = JSON.parse(response);

            let users = response.message;

            let final_html = `<thead><tr>
                <th>Isim</th>
                <th>Soyisim</th>
            </tr></thead><tbody>`;

            users.forEach(u => {
                final_html += `<tr>
                <td>${u.name}</td>
                <td>${u.surname}</td>
                </tr>`
            });

            final_html += "</tbody>"

            $('#users').html(final_html);

            Swal.close();
        }, function(response) {
            response = JSON.parse(response);
            showSwal(response.message, 'error');
        });
    }


    function addName() {
        let data = new FormData();
        let $nameInput = $("#nameInput");
        let $surnameInput = $("#surnameInput");

        data.append("name", $nameInput.val());
        data.append("surname", $surnameInput.val());



        request("{{ API('add_guzzletestnames') }}", data,
            function(response) {
                response = JSON.parse(response);
                if(response.status == 200){
                    getNames();
                    $nameInput.val("");
                    $surnameInput.val("");
                }
            });
    }


    function guzzleTest() {
        getNames();
    }
</script>
