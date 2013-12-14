function bannerVisibility(evt) {
	if(evt.folder == 'Spam')
    $('#infobanner').show();
  else
    $('#infobanner').hide();
}

rcmail.addEventListener('init', bannerVisibility);
rcmail.addEventListener('selectfolder', bannerVisibility);