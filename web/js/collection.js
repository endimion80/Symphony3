function Collection(collectionHolder, completeElement, completeUrl) {
    this.$collectionHolder = $(collectionHolder);
    this.completeElement = completeElement;
    this.completeUrl = completeUrl;
    this.single = false;
    var self = this;

    this.init = function () {

        if (this.$collectionHolder.hasClass("single-document")) {
            this.single = false;
        }

        if (this.completeUrl) {
            var $addTagLink = $('<a href="#" class="add-icon vinculated"></a>');
        } else {
            var $addTagLink = $('<a href="#" class="add-icon"></a>');
        }
        if (this.single) {
            var $newLink = $('<div class="item-add noshow"></div>').append($addTagLink);
        } else {
            var $newLink = $('<div class="item-add"></div>').append($addTagLink);
        }

        // enlace para añadir nueva colección
        this.$collectionHolder.append($newLink);

        // enlace eliminar para todos los existentes elementos div.item-collection
        this.$collectionHolder.children('div.item-collection').each(function () {
            self.addDeleteLink($(this));
        });

        // cuenta los elementos div.item y se usa el resultado como index.
        this.$collectionHolder.data('index', this.$collectionHolder.children('div.item-collection').length);

        $addTagLink.on('click', function (e) {
            //previene que el enlace creee un "#" en la URL
            e.preventDefault();

            // añade un nuevo div.item
            self.addForm($newLink);
        });
        // si no exiten div.item-collection se crea uno 
        if (!this.$collectionHolder.children('div.item-collection').length) {
            self.addForm($newLink);
        }
        if (this.completeUrl) {
            self.addAutoComplete();
        }

    };
    this.addForm = function ($newLink) {
        // se trae el prototipo del input
        var prototype = this.$collectionHolder.data('prototype');

        // se trae el nuevo index
        var index = this.$collectionHolder.data('index');

        // reemplaza '__name__'  en el prototipo HTML para añadir el índice  y se añade class ui-front
//        var newForm = prototype.replace(/__name__/g, index).replace(/<div><input type="text"/g, '<div class="ui-front"><input type="text"');
        var newForm = prototype.replace(/__name__/g, index);
        if (this.single) {
            newForm = '<span class="item-delete noshow"></span>' + newForm;
        } else {
            newForm = '<span class="item-delete"></span>' + newForm;
        }
        // incrementa el índice para el próximo item
        this.$collectionHolder.data('index', index + 1);

        // muestra el input en un div.item, antes del enlace añadir
        var $newFormItem = $('<div class="item-collection"></div>').append(newForm);
        $newLink.before($newFormItem);

        // añade un enlace eliminar
        self.addDeleteLink($newFormItem);

        // para documentos simples
        singleDocument();

        if (this.completeUrl) {
            self.addAutoComplete();
        }
        // carga datePicker para los campos de fecha.
        //datePicker();

        // crea una subCollection
        if ($newFormItem.length) {
            // iterar por todos los div con prototype
            $newFormItem.find('div[data-prototype]').each(function () {
                var $selfSub = $(this);
                var newpro = subCollection($selfSub.data('prototype'));
                $selfSub.attr('data-prototype', newpro);
                $selfSub.data('prototype', newpro);
                var $label = $selfSub.prev('label');
                // si no tiene un item-collection se añade
                if (!$selfSub.children('div.item-collection').length) {
                    var id = '#' + $selfSub.attr('id');
                    // crear colección
                    if ('-1' != id.indexOf("signerIndra")) {
                        var collection = new Collection(id, "input[id*='signerIndra'][type='text']", ldapUrl);
                        collection.init();
                    } else {
                        var collection = new Collection(id, false, false);
                        collection.init();
                    }
                    // quitar el label por defecto de la collección
                    $selfSub.find('label').remove();

                    // en las extensiones sólo se requiere un documento. TODO falta discriminar el contexto de extensión.
                    if ('-1' != id.indexOf("document")) {
                        $(id).addClass('single-document');
                        singleDocument();
                    }

                    var $parentCollection = $(id).closest('div.item-collection');
                    var parentId = $selfSub.parents().eq(1).attr('id');
                    // si el collpsable de la subcolección no existe, se crea.
//                    if (!$("#collapse-" + parentId).length) {
//                        var $btnCollapse = $('<button class="btn btn-info collapsed" type="button" data-toggle="collapse" data-target="#collapse-' + parentId + '" aria-expanded="false">Documento</button>');
//                        var $divCollapse = $('<div id="collapse-' + parentId + '" class="collapse-extension collapse" aria-expanded="false"></div>');
//                        $parentCollection.append($btnCollapse);
//                        $parentCollection.append($divCollapse);
//                    }
                    // se incorpora la colección al collapsable
//                    $("#collapse-" + parentId).append($label);
//                    if ('Firmantes de consultor' == $label.html()) {
//                        var headers = $('<div class="collection-header"><div style="width:203px">Nombre</div><div class="dni" style="width:123px">DNI</div><div style="width:135px">Teléfono</div><div style="width:135px">Móvil</div><div style="width:133px">Fax</div><div style="width:200px">Email</div></div>');
//                        $("#collapse-" + parentId).append(headers);
//                        $selfSub.addClass('extension-with-texarea');
//                        $("form.service .extension div.dni").remove();
//                    }
//                    $("#collapse-" + parentId).append($selfSub);
                    $("#" + parentId).append($label);
                    $("#" + parentId).append($selfSub);



                }
            });
        }
    };


    this.addDeleteLink = function ($newFormItem) {
        var $removeFormA = $('<a href="#" class="icon-delete"> </a>');
        $newFormItem.children("span.item-delete").append($removeFormA);

        $removeFormA.on('click', function (e) {
            // previene que el enlace cree un "#" en el URL
            e.preventDefault();

            // elemina el item
            $newFormItem.remove();
            // para documentos simples
            singleDocument();
        });
    };

    this.addAutoComplete = function () {
        if (this.completeElement) {
            $(this.completeElement).autocomplete({
                source: this.completeUrl,
                minLength: 3,
                delay: 900,
                position: {my: "left bottom", at: "left top", collision: "flip"},
                select: function (event, ui) {
                    if (ui.item) {
                        $(this).val(ui.item.label);
                        var inputId = $(this).attr('id').replace(/_name/g, '_id');
                        $('#' + inputId).val(ui.item.value);
                        $(this).removeClass('ui-autocomplete-loading');
                        event.preventDefault();
                    }
                }
            });
        }
    };
}
var singleDocument = function () {
    $("div.single-document").each(function () {
        var $elf = $(this);
        if ($elf.find("input:file").length) {
            if ($elf.find(".item-collection").length) {
                $elf.find(".item-add").css("visibility", "hidden");
                $elf.find(".item-delete").css("visibility", "hidden");
            }
        }
        if ($elf.find(".item-delete").css("visibility") == "visible") {
            $elf.find(".item-add").css("visibility", "hidden");
        } else {
            if (!$elf.find("input:file").length) {
                $elf.find(".item-add").css("visibility", "visible");
            }
        }
    });
}


var subCollection = function (prototype) {
    // Subcollección ducoment
    var proto = prototype.replace(/document_[0-9]_/g, 'document___name__');
    proto = proto.replace(/\[document\]\[[0-9]\]/g, '[document][__name__]');
    proto = proto.replace(/_document_[0-9]">/g, '_document___name__');
    // Subcollección signerConsultant
    proto = proto.replace(/signerConsultant_[0-9]/g, 'signerConsultant___name__');
    proto = proto.replace(/\[signerConsultant\]\[[0-9]\]/g, '[signerConsultant][__name__]');
    proto = proto.replace(/_signerConsultant_[0-9]">/g, '_signerConsultant___name__');
    // Subcollección signerIndra
    proto = proto.replace(/signerIndra_[0-9]/g, 'signerIndra___name__');
    proto = proto.replace(/\[signerIndra\]\[[0-9]\]/g, '[signerIndra][__name__]');
    proto = proto.replace(/_signerIndra_[0-9]">/g, '_signerIndra___name__');
    // quitar label
    proto = proto.replace(/<label.*label>/g, '');

    return proto;
}