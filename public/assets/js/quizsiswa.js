window.addHTML = function(idsiswa, namasiswa){

    var btnExtrn_1 = $('<button/>', { text: namasiswa}).attr({
        type: "button",
        id: 'btnModal' + idsiswa,
        class: 'col-md-2 ms-1 mt-1 btn buathitung btn-outline-primary block',
        'data-bs-toggle': 'modal',
        'data-bs-target': '#siswa' + idsiswa,
    });
    //append di bawah

    var divExtrn_2 = $('<div/>').attr({
        id: 'siswa' + idsiswa,
        tabindex: '-1',
        role: 'dialog',
        'aria-labelledby': 'siswa' + idsiswa,
        'aria-hidden': 'true',
        class: 'modal fade text-left'
    })
    //append di bawah

    $('#buttonField').append(btnExtrn_1);
    $('#quizcontainer').append(divExtrn_2);

    var divExtrn_3 = $('<div/>').attr({
        class: 'modal-dialog modal-dialog-scrollable',
        role: 'document',
        id: 'modalDialog' + idsiswa
    })

    divExtrn_3.appendTo('#siswa' + idsiswa);

    var divExtrn_4 = $('<div/>').attr({
        class: 'modal-content',
        id: 'modalContent' + idsiswa
    })
    divExtrn_4.appendTo('#modalDialog' + idsiswa);

    var divExtrn_5 = $('<div/>').attr({
        class: 'modal-header',
        id: 'modalHeader' + idsiswa
    })
    divExtrn_5.appendTo('#modalContent' + idsiswa)

    var headInter_1 = $('<h5/>', { text: namasiswa }).attr({
        class: 'modal-title',
        id: 'titlesiswa' + idsiswa,
    })

    headInter_1.appendTo('#modalHeader' + idsiswa)

    var btnInter_1 = $('<button/>').attr({
        type: 'button',
        class: 'close btn btn-danger rounded-pill',
        'data-bs-dismiss': 'modal',
        'aria-label': 'Close',
        id: 'btnInter' + idsiswa
    })

    btnInter_1.appendTo('#modalHeader' + idsiswa)

    var IconInter_1 = $('<i/>').attr({
        'data-feather': 'x',
        class: 'fa-solid fa-x'
    })

    IconInter_1.appendTo('#btnInter' + idsiswa)

    var divExtrn_6 = $('<div/>').attr({
        class: 'modal-body',
        id: 'modalBody' + idsiswa
    })

    divExtrn_6.appendTo('#modalContent' + idsiswa)

    var divFormInter_1 = $('<div/>').attr({
        class: 'form-check',
        id: 'formLuar1' + idsiswa
    })

    divFormInter_1.appendTo('#modalBody' + idsiswa)

    var groupDiv1 = $('<div/>').attr({
        class: 'mb-3',
        id: 'groupDiv1' + idsiswa
    })

    groupDiv1.appendTo('#formLuar1' + idsiswa)

    var labelNama = $('<label/>', { text: 'Nama Siswa' }).attr({
        class: 'form-label',
        for: 'ask'
    })

    labelNama.appendTo('#groupDiv1' + idsiswa)

    var NamaSiswaInput = $('<input/>').attr({
        type: 'text',
        name: "ans["+idsiswa+"][name]",
        class: 'form-control',
        id: 'ask',
        value: namasiswa
    })

    NamaSiswaInput.appendTo('#groupDiv1' + idsiswa)

    var divFormInter_2 = $('<div/>').attr({
        class: 'form-check',
        id: 'formLuar2' + idsiswa
    })

    divFormInter_2.appendTo('#modalBody' + idsiswa)

    var groupDiv2 = $('<div/>').attr({
        class: 'mb-3',
        id: 'groupDiv2' + idsiswa
    })

    groupDiv2.appendTo('#formLuar2' + idsiswa)

    var IdSiswaInput = $('<input/>').attr({
        type: 'hidden',
        name: "ans["+ idsiswa +"][id]",
        class: 'form-control',
        id: 'ask',
        value: idsiswa,
    }).prop('required',true);

    IdSiswaInput.appendTo('#groupDiv2' + idsiswa)

    var groupDiv3 = $('<div/>').attr({
        id: 'persiswaan' + idsiswa,
        class: 'quizsiswa mb-3'
    })

    groupDiv3.appendTo('#modalBody' + idsiswa)

    var tableInter1 = $('<table/>').attr({
        class: 'table table-borderless',
        id: 'table' + idsiswa
    })

    tableInter1.appendTo('#persiswaan' + idsiswa)

    var thead = $('<thead/>').attr({ id: 'thead' + idsiswa })
    thead.appendTo('#table' + idsiswa)

    $('<tr/>', {text: 'Kondisi Siswa'}).attr({ colspan: 3 }).appendTo('#thead' + idsiswa)

    var tbody = $('<tbody/>').attr({ id: 'tbody' + idsiswa })
    tbody.appendTo('#table' + idsiswa)

    $('<ul/>').attr({id: 'Section1' + idsiswa}).appendTo('#tbody' + idsiswa)

    Section1Question = [
        'Fokus', 'Moodnya baik', 'Materi tuntas tersampaikan', 'Suasana belajar kondusif', 'Tempat belajar nyaman'
    ]

    for(var i = 0; i < 5; i++){

    TableRowBody = $('<tr/>').attr({id: 'SubSection1' + i + idsiswa })

    TableRowBody.appendTo('#Section1' + idsiswa)

    Col1 = $('<td/>').attr({ id: 'SubSection1A' + i + idsiswa})

    Col1.append($('<li/>', {text: Section1Question[i]}))

    Col1.appendTo('#SubSection1' + i + idsiswa)


    var ansray = ['', 'Ya', 'Tidak'];

        for(var j = 1; j < 3; j++){

            Col2 = $('<td/>').attr({ id: 'SubSection1B' + j + i + idsiswa})

            Col2.appendTo('#SubSection1' + i + idsiswa)

            var divPertanyaan = $('<div/>').attr({
                class: 'form-check',
                id: 'AnsSection1B' + j + i + idsiswa
            })

            divPertanyaan.appendTo('#SubSection1B' + j + i + idsiswa)

            var inputAnswer = $('<input/>').attr({
                class: 'form-check-input',
                type: 'radio',
                name: 'ans['+ idsiswa +']['+ (i + 1) +']',
                id: 'ans' + j,
                value: ansray[j]
            }).prop('required', true);

            inputAnswer.appendTo('#AnsSection1B' + j + i + idsiswa)

            var labelAnswer = $('<label/>', {text: ansray[j] }).attr({
                class: 'form-check-label',
                for: 'ans' + j
            })

            labelAnswer.appendTo('#AnsSection1B' + j + i + idsiswa)

        }

    }

    var tableInter2 = $('<table/>').attr({
        class: 'table table-borderless',
        id: 'table2' + idsiswa
    })

    tableInter2.appendTo('#persiswaan' + idsiswa)

    var thead = $('<thead/>').attr({ id: 'thead2' + idsiswa })
    thead.appendTo('#table2' + idsiswa)

    $('<tr/>', {text: 'Kedisiplinan'}).attr({ colspan: 3 }).appendTo('#thead2' + idsiswa)

    var tbody = $('<tbody/>').attr({ id: 'tbody2' + idsiswa })
    tbody.appendTo('#table2' + idsiswa)

    $('<ul/>').attr({id: 'Section2' + idsiswa}).appendTo('#tbody2' + idsiswa)

    Section2Question = [
        'Mulai tepat waktu', 'Selesai tepat waktu'
    ]

    for(var i = 0; i < 2; i++){

    TableRowBody = $('<tr/>').attr({id: 'SubSection2' + i + idsiswa })

    TableRowBody.appendTo('#Section2' + idsiswa)

    Col1 = $('<td/>').attr({ id: 'SubSection2A' + i + idsiswa})

    Col1.append($('<li/>', {text: Section2Question[i]}))

    Col1.appendTo('#SubSection2' + i + idsiswa)


    var ansray = ['', 'Ya', 'Tidak'];

        for(var j = 1; j < 3; j++){

            Col2 = $('<td/>').attr({ id: 'SubSection2B' + j + i + idsiswa})

            Col2.appendTo('#SubSection2' + i + idsiswa)

            var divPertanyaan = $('<div/>').attr({
                class: 'form-check',
                id: 'AnsSection2B' + j + i + idsiswa
            })

            divPertanyaan.appendTo('#SubSection2B' + j + i + idsiswa)

            var inputAnswer = $('<input/>').attr({
                class: 'form-check-input',
                type: 'radio',
                name: 'ans['+ idsiswa +']['+ (i + 6) +']',
                id: 'ans' + j,
                value: ansray[j]
            }).prop('required', true);

            inputAnswer.appendTo('#AnsSection2B' + j + i + idsiswa)

            var labelAnswer = $('<label/>', {text: ansray[j] }).attr({
                class: 'form-check-label',
                for: 'ans' + j
            })

            labelAnswer.appendTo('#AnsSection2B' + j + i + idsiswa)

        }

    }

    var tableInter3 = $('<table/>').attr({
        class: 'table table-borderless',
        id: 'table3' + idsiswa
    })

    tableInter3.appendTo('#persiswaan' + idsiswa)

    var thead = $('<thead/>').attr({ id: 'thead3' + idsiswa })
    thead.appendTo('#table3' + idsiswa)

    $('<tr/>', {text: 'Kualitas Belajar'}).attr({ colspan: 3 }).appendTo('#thead3' + idsiswa)

    var tbody = $('<tbody/>').attr({ id: 'tbody3' + idsiswa })
    tbody.appendTo('#table3' + idsiswa)

    $('<ul/>').attr({id: 'Section3' + idsiswa}).appendTo('#tbody3' + idsiswa)

    Section3Question = [
        'Ada masalah', 'Ada PR yang belum selesai', 'Adakah inspirasi dan motivasi yang diberikan?', 'Berikan Nilai 1-100'
    ]

    for(var i = 0; i < 4; i++){

        TableRowBody = $('<tr/>').attr({id: 'SubSection3' + i + idsiswa })

        TableRowBody.appendTo('#Section3' + idsiswa)

        Col1 = $('<td/>').attr({ id: 'SubSection3A' + i + idsiswa})

        Col1.append($('<li/>', {text: Section3Question[i]}))

        Col1.appendTo('#SubSection3' + i + idsiswa)

        Col2 = $('<td/>').attr({ id: 'SubSection3B' + (8 + i) + idsiswa})

        Col2.appendTo('#SubSection3' + i + idsiswa)

        var divPertanyaan = $('<div/>').attr({
            class: 'form-check',
            id: 'AnsSection3B' + (8 + i) + idsiswa
        })

        divPertanyaan.appendTo('#SubSection3B' + (8 + i) + idsiswa)

        var divLineBreak = $('<div/>').attr({
            class: 'mb-3',
            id: 'Section3LineBreak' + i + idsiswa
        })

        divLineBreak.appendTo('#AnsSection3B' + (8 + i) + idsiswa)

        var InputText = $('<input/>').attr({
            type: 'text',
            name: 'ans[' + idsiswa + '][' + i + ']',
            class: 'form-control',
            id: 'ask'
        })

        InputText.appendTo('#Section3LineBreak' + i + idsiswa)

        Col3 = $('<td/>').attr({ id: 'SubSection3C' + (8 + i) + idsiswa})

        Col3.appendTo('#SubSection3' + i + idsiswa)

        var divPertanyaan = $('<div/>').attr({
            class: 'form-check form-switch',
            id: 'AnsSection3C' + (8 + i) + idsiswa
        })

        divPertanyaan.appendTo('#SubSection3C' + (8 + i) + idsiswa)

    }

    var divExtrn_7 = $('<div/>').attr({
        class: 'modal-footer',
        id: 'modalFooter' + idsiswa
    })

    divExtrn_7.appendTo('#modalContent' + idsiswa)

    var btnInter_2 = $('<button/>').attr({
        type: 'button',
        class: 'btn',
        'data-bs-dismiss': "modal",
        id: 'buttonClose' + idsiswa
    })

    btnInter_2.appendTo('#modalFooter' + idsiswa)

    var icon2 = $('<i/>').attr({
        class: 'bx bx-x d-block d-sm-none'
    })

    icon2.appendTo('#buttonClose' + idsiswa)

    var span = $('<span/>', {text: 'Close'}).attr({
        class: 'd-none d-sm-block'
    })

};
