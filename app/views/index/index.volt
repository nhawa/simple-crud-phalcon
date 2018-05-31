{% for value in produk %}
    {% if loop.first %}
        <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
    {% endif %}

    <tr>
        <td>
            {{ value.id }}
        </td>

        <td>
            {{ value.nama }}
        </td>

        <td>
            {{ value.deskripsi }}
        </td>


        <td width="7%">
            {{ link_to("edit/" ~ value.id, "Edit") }} | {{ link_to("delete/" ~ value.id, "Delete") }}
        </td>

    </tr>

    {% if loop.last %}
        </tbody>
        </table>
    {% endif %}
{% else %}
    No products are recorded
{% endfor %}