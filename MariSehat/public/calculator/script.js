$(function () {
    $(".addMore").on('click', function () {
        // e.preventDefault();
        var $self = $(this);
        $self.after($self.parent().clone());
    });
});