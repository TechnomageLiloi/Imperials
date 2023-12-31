API.Imperials = {
    getCollection: function ()
    {
        API.request('Imperials.Imperials.Collection', {

        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function (key)
    {
        API.request('Imperials.Imperials.Show', {
            'key': key
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Imperials.Imperials.Create', {
            'debug': true
        }, function (data) {
            API.Imperials.getCollection();
        }, function () {

        });
    },

    remove: function (key)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Imperials.Imperials.Remove', {
            'key': key
        }, function (data) {
            API.Imperials.getCollection();
        }, function () {

        });
    },

    edit: function (key)
    {
        API.request('Imperials.Imperials.Edit', {
            'key': key
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    save: function (key)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#ticket-edit');
        API.request('Imperials.Imperials.Save', {
            'key': key,
            'title': jq_block.find('[name="title"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'program': jq_block.find('[name="program"]').val(),
            'credits': jq_block.find('[name="credits"]').val()
        }, function (data) {
            API.Imperials.getCollection();
        }, function () {

        });
    }
}