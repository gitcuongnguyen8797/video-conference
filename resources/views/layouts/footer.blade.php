

<footer class="footer has-background-grey-darker">
	<div class="content has-text-centered has-text-grey">
		<p>
			Gemeinde Ismaning, Schloßstraße 2, 85737 Ismaning | <a href="https://ismaning.de/impressum/" target="_blank">Impressum</a> | <a href="https://ismaning.de/datenschutz/" target="_blank">Datenschutz</a>
		</p>
	</div>
</footer>

<script>
var navigationBox = $('nav');
var conferenceNameBox = navigationBox.find('.item-logged-in');
var startTitleBox = navigationBox.find('.item-logged-out');
var subtitleSectionBox = $('section.is-subtitle');
var heroSectionBox = $('section.hero');
var hangupButton = $('#hangup');
var footerBox = $('footer');
var faqButton = $('#faq');
var inviteButton = $('#invite');
var notificationBox = $('#notification');
var notificationText = notificationBox.find('span');
var jitsiBox = $('#jitsi');

var api;
var clipboard;

conferenceNameBox.hide();
hangupButton.hide();
//inviteButton.prop('disabled', true);
inviteButton.hide();
notificationBox.hide();

hangupButton.click(function() {
    var button = $(this);
    var textBlock = button.find('span:last');
    var originalText = textBlock.html();
    var completeText = textBlock.data('completetext');
    if(typeof api === 'object' && typeof api.executeCommand === 'function') {
        api.executeCommand('hangup');
    }
    textBlock.html(completeText);
    setTimeout(function(){
        textBlock.html(originalText);
    }, 1000);
});

notificationBox.find('.delete').click(function() {
    var el = $(this).parent();
    el.find('span').html('');
    el.hide();
});

$('#loginform').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    notificationBox.hide();
    form.find('button').prop('disabled', true);
    $.ajax({
        url: window.location.href,
        type: 'post',
        data: form.serialize(),
        success: function(result) {
            if(result.error) {
                notificationText.html(result.error);
                notificationBox.show();
            }
            else {
                api = new JitsiMeetExternalAPI('videokonferenz-unterfoehring.de', {
                    roomName: result.room,
                    jwt: result.token,
                    width: '100%',
                    configOverwrite: { defaultLanguage: 'de' },
                    height: ( ( ( subtitleSectionBox.height() + heroSectionBox.height() ) / ( ( subtitleSectionBox.height() + heroSectionBox.height() ) + navigationBox.height() ) ) * 100 ) + '%',
                    parentNode: jitsiBox[0]
                });
                api.addEventListeners( {
                    readyToClose: function() {
                        api.dispose();
                        api = undefined;
                        window.location.reload();
                    }
                } );
                conferenceNameBox.find('strong').html(result.room);
               	startTitleBox.hide();
                conferenceNameBox.show();
                hangupButton.show();

                inviteButton.data('invite', result.invite);
                $('.invite-button').attr("data-clipboard-text", result.invite);

                clipboard = new ClipboardJS('.invite-button');

                clipboard.on('success', function(e) {
                    var button = $('#invite');
                    var textBlock = button.find('span:last');
                    var originalText = textBlock.html();
                    var completeText = textBlock.data('completetext');
                    textBlock.html(completeText);
                    setTimeout(function(){
                        textBlock.html(originalText);
                    }, 1000);

                    e.clearSelection();
                });

                clipboard.on('error', function(e) {
                    console.error('Action:', e.action);
                    console.error('Trigger:', e.trigger);
                });

                inviteButton.prop('disabled', false);
                inviteButton.show();
                form.find('input').val('');
                subtitleSectionBox.hide();
                heroSectionBox.hide();
                footerBox.hide();
            }
            form.find('button').prop('disabled', false);
        },
        error: function() {
            notificationText.html(notificationBox.data('internalerror'));
            notificationBox.show();
            form.find('button').prop('disabled', false);
        }
    });
});
</script>

<div class="inv" data-invite-link="">
</div>


</body>