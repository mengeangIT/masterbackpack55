function runFq_customer_idproductF(o) {

    var tr = '<tr>\n' +
        '            <td><input  type="hidden" value="' + o.id + '" name="product_id[]" class="product_id">\n' +
        '                <input readonly type="text" value="" name="no[]" class="form-control no"></td>\n' +
        '            <td><input  type="text" value="' + o.title + '"  class="form-control product-name"></td>\n' +
        '            <td><input  type="text" value="1" name="qty[]"  class="form-control qty c-hnumber"></td>\n' +
        '            <td><input  type="text" value="' + o.cost + '" name="cost[]"  class="form-control cost c-hnumber"></td>\n' +
        '            <td><input  type="text" value="" name="unit[]"  class="form-control unit"></td>\n' +
        '            <td><input  type="text" value="0" name="discount[]"  class="form-control discount c-hnumber"></td>\n' +
        '            <td><input  type="text" value="0" name="tax[]"  class="form-control tax c-hnumber"></td>\n' +
        '            <td><input readonly type="text" value="' + (o.cost) + '" name="amount[]"  class="form-control amount c-hnumber"></td>\n' +
        '            <td>\n' +
        '                <button  class="btn btn-sm btn-default delete-product" type="button"><span class="sr-only">delete item</span><i class="fa fa-trash" role="presentation" aria-hidden="true"></i></button>\n' +
        '            </td>\n' +
        '        </tr>';

    $('.tbody-show-detail').prepend(tr);

    $('.table-show-detail').show();
    calFProductDeatilF();
}

$(function () {

    $(document).on("change keyup input", ".qty,.cost,.discount,.tax,.total_discount,.total_tax", function() {
        calFProductDeatilF();
    });

});

function calFProductDeatilF() {
    var total_amount = 0;

    $('.table-show-detail tr').each(function () {

        var tr = $(this);

        var qty = _n(tr.find('.qty').val());
        var cost = _n(tr.find('.cost').val());
        var discount = _n(tr.find('.discount').val());
        var tax = _n(tr.find('.tax').val());

        var amount = qty * cost * (1 - (discount / 100)) * (1 + (tax / 100));


            tr.find('.amount').val(amount);
            total_amount += amount;


    });

    $('.total_amount').val(total_amount);

    var total_discount = _n($('.total_discount').val());
    var total_tax = _n($('.total_tax').val());
    var grand_total_tax = (total_amount - total_discount)*(1+(total_tax/100));
    $('.grand_total_tax').val(grand_total_tax);

    var no = 0;
    $('.no').each(function () {
        no++;
        $(this).val(no);

    });

    return grand_total_tax;

}

