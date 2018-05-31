
<div id="messages">{{ flashSession.output() }}</div>
{#<div id="messages">{{ flash2.getMessages() }}</div>#}
<div id="messages">{{ flash2.output() }}</div>
{{ form(action, 'method': 'post') }}


<div class="form-group">
    <label for="nama">Nama</label>

    {% if produk is defined%}
        {{ text_field("nama", "class":"form-control","value":produk.nama) }}
    {% else %}
        {{ text_field("nama", "class":"form-control") }}
    {% endif %}
</div>
<div class="form-group">
    <label for="deskripsi">Deskripsi</label>

    {% if produk is defined%}
        {{ text_field("deskripsi", "class":"form-control","value":produk.deskripsi) }}
    {% else %}
        {{ text_field("deskripsi", "class":"form-control") }}
    {% endif %}
</div>


    {{ submit_button('Submit',"class":"btn btn-primary") }}

{{ end_form() }}