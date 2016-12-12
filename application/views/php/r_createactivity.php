<!DOCTYPE html>
<html lang="en">

<head>


	<title>Healthier</title>
	<!-- Custom CSS -->
	<link href="<?php echo base_url("/css/github-css1.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("/css/github-css2.css"); ?>" rel="stylesheet">

	<link href='<?php echo base_url("/css/healthier.css"); ?>' rel="stylesheet">
	<link href='<?php echo base_url("/css/sport.css"); ?>' rel="stylesheet">

	<link href='<?php echo base_url("/css/activity.css"); ?>' rel="stylesheet">

	<link href='<?php echo base_url("/css/bootstrap-datetimepicker.min.css"); ?>' rel="stylesheet">

	<script src='<?php echo base_url("/js/mychart.js"); ?>'></script>
	<script src='<?php echo base_url("/js/jquery.js"); ?>'></script>
	<script src='<?php echo base_url("/js/bootstrap-datetimepicker.min.js"); ?>'></script>

	<?php
	include "php_part/meta.php";
	?>
</head>

<?php
include "navbar.php";
?>

<div class="container">

	<?php
	include "php_part/race_aside.php";
	?>
	<div class="col-md-9">
		<div class="row pageBg">
			<div class="text-center">
				<span class="little-title">Create A Race</span>
			</div>
			<div class="blank10"></div>
			<div class="box pageInnerBg">

				<div class="blank10"></div>


				<div class="timeline-comment-wrapper timeline-new-comment composer">
					<a href="/OptimusPrime1997"><img alt="@<?php
						if (!empty(get_cookie('username'))) {
							echo get_cookie('username');
						} ?>" class="timeline-comment-avatar"
													 height="44"
													 src="<?php
													 if (!empty(get_cookie('img_name'))) {
														 echo base_url('/img/' . get_cookie('img_name'));
													 } ?>"
													 width="44"/></a>

					<div class="timeline-comment">
						<div class="discussion-topic-header">
							<input aria-label="Title" autocomplete="off" autofocus="autofocus"
								   class="form-control input-lg input-block input-contrast required title js-quick-submit js-session-resumable"
								   id="issue_title" name="issue[title]" placeholder="Race Name" required="required"
								   size="30" type="text"/>
						</div>


						<div
							class="js-suggester-container  js-previewable-comment-form previewable-comment-form write-selected"
							data-preview-url="/preview?markdown_unsupported=false&amp;repository=71317553&amp;subject=0&amp;subject_type=Issue"
							data-preview-authenticity-token="GGmrSPCdIo3vnYLM6WHBsxVwig1xz1rcpPzoZJn18sm4vWnmeiglYq+SdTxEMdQ9QjScrvKJ6ncj08uHsV2Ilg==">
							<div class="comment-form-head tabnav">
								<!--<div class="js-toolbar toolbar-commenting">
									<div class="toolbar-group">
										<div class="toolbar-item dropdown js-menu-container">
											<button type="button" tabindex="-1"
													class="js-menu-target menu-target tooltipped tooltipped-n"
													aria-label="Add header text">
												<svg aria-hidden="true" class="octicon octicon-text-size"
													 height="16" version="1.1" viewBox="0 0 18 16" width="18">
													<path fill-rule="evenodd"
														  d="M13.62 9.08L12.1 3.66h-.06l-1.5 5.42h3.08zM5.7 10.13S4.68 6.52 4.53 6.02h-.08l-1.13 4.11H5.7zM17.31 14h-2.25l-.95-3.25h-4.07L9.09 14H6.84l-.69-2.33H2.87L2.17 14H0l3.3-9.59h2.5l2.17 6.34L10.86 2h2.52l3.94 12h-.01z"/>
												</svg>
												<span class="dropdown-caret"></span>
											</button>

											<div class="dropdown-menu-content js-menu-content">
												<ul class="dropdown-menu dropdown-menu-s">
													<button type="button"
															class="js-toolbar-item dropdown-item dropdown-header1"
															data-prefix="# "
															data-ga-click="Markdown Toolbar, click, header1">
														Header
													</button>
													<button type="button"
															class="js-toolbar-item dropdown-item dropdown-header2"
															data-prefix="## "
															data-ga-click="Markdown Toolbar, click, header2">
														Header
													</button>
													<button type="button"
															class="js-toolbar-item dropdown-item dropdown-header3"
															data-prefix="### "
															data-ga-click="Markdown Toolbar, click, header3">
														Header
													</button>
												</ul>
											</div>
										</div>

										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-n"
												aria-label="Add bold text <ctrl+b>" data-prefix="**"
												data-suffix="**" data-toolbar-hotkey="b"
												data-ga-click="Markdown Toolbar, click, bold" data-trim-first>
											<svg aria-hidden="true" class="octicon octicon-bold" height="16"
												 version="1.1" viewBox="0 0 10 16" width="10">
												<path fill-rule="evenodd"
													  d="M1 2h3.83c2.48 0 4.3.75 4.3 2.95 0 1.14-.63 2.23-1.67 2.61v.06c1.33.3 2.3 1.23 2.3 2.86 0 2.39-1.97 3.52-4.61 3.52H1V2zm3.66 4.95c1.67 0 2.38-.66 2.38-1.69 0-1.17-.78-1.61-2.34-1.61H3.13v3.3h1.53zm.27 5.39c1.77 0 2.75-.64 2.75-1.98 0-1.27-.95-1.81-2.75-1.81h-1.8v3.8h1.8v-.01z"/>
											</svg>
										</button>

										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-n"
												aria-label="Add italic text <ctrl+i>" data-prefix="_"
												data-suffix="_" data-toolbar-hotkey="i"
												data-ga-click="Markdown Toolbar, click, italic" data-trim-first>
											<svg aria-hidden="true" class="octicon octicon-italic" height="16"
												 version="1.1" viewBox="0 0 6 16" width="6">
												<path fill-rule="evenodd"
													  d="M2.81 5h1.98L3 14H1l1.81-9zm.36-2.7c0-.7.58-1.3 1.33-1.3.56 0 1.13.38 1.13 1.03 0 .75-.59 1.3-1.33 1.3-.58 0-1.13-.38-1.13-1.03z"/>
											</svg>
										</button>
									</div>

									<div class="toolbar-group">
										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-n"
												aria-label="Insert a quote" data-prefix="> " data-multiline="true"
												data-ga-click="Markdown Toolbar, click, quote"
												data-surround-with-newlines>
											<svg aria-hidden="true" class="octicon octicon-quote" height="16"
												 version="1.1" viewBox="0 0 14 16" width="14">
												<path fill-rule="evenodd"
													  d="M6.16 3.5C3.73 5.06 2.55 6.67 2.55 9.36c.16-.05.3-.05.44-.05 1.27 0 2.5.86 2.5 2.41 0 1.61-1.03 2.61-2.5 2.61-1.9 0-2.99-1.52-2.99-4.25 0-3.8 1.75-6.53 5.02-8.42L6.16 3.5zm7 0c-2.43 1.56-3.61 3.17-3.61 5.86.16-.05.3-.05.44-.05 1.27 0 2.5.86 2.5 2.41 0 1.61-1.03 2.61-2.5 2.61-1.89 0-2.98-1.52-2.98-4.25 0-3.8 1.75-6.53 5.02-8.42l1.14 1.84h-.01z"/>
											</svg>
										</button>

										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-n"
												aria-label="Insert code" data-prefix="`" data-suffix="`"
												data-block-prefix="```" data-block-suffix="```"
												data-ga-click="Markdown Toolbar, click, code">
											<svg aria-hidden="true" class="octicon octicon-code" height="16"
												 version="1.1" viewBox="0 0 14 16" width="14">
												<path fill-rule="evenodd"
													  d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/>
											</svg>
										</button>

										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-n"
												aria-label="Add a link <ctrl+k>" data-prefix="["
												data-suffix="](url)" data-replace-next="url" data-toolbar-hotkey="k"
												data-scan-for="https?://"
												data-ga-click="Markdown Toolbar, click, link">
											<svg aria-hidden="true" class="octicon octicon-link" height="16"
												 version="1.1" viewBox="0 0 16 16" width="16">
												<path fill-rule="evenodd"
													  d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"/>
											</svg>
										</button>
									</div>

									<div class="toolbar-group">
										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-n"
												aria-label="Add a bulleted list" data-multiline="true"
												data-prefix="- " data-multiline="true"
												data-ga-click="Markdown Toolbar, click, unordered list"
												data-surround-with-newlines>
											<svg aria-hidden="true" class="octicon octicon-list-unordered"
												 height="16" version="1.1" viewBox="0 0 12 16" width="12">
												<path fill-rule="evenodd"
													  d="M2 13c0 .59 0 1-.59 1H.59C0 14 0 13.59 0 13c0-.59 0-1 .59-1h.81c.59 0 .59.41.59 1H2zm2.59-9h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1H4.59C4 2 4 2.41 4 3c0 .59 0 1 .59 1zM1.41 7H.59C0 7 0 7.41 0 8c0 .59 0 1 .59 1h.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm0-5H.59C0 2 0 2.41 0 3c0 .59 0 1 .59 1h.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm10 5H4.59C4 7 4 7.41 4 8c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm0 5H4.59C4 12 4 12.41 4 13c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01z"/>
											</svg>
										</button>
										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-n"
												aria-label="Add a numbered list" data-prefix="1. "
												data-multiline="true"
												data-ga-click="Markdown Toolbar, click, ordered list"
												data-ordered-list>
											<svg aria-hidden="true" class="octicon octicon-list-ordered" height="16"
												 version="1.1" viewBox="0 0 12 16" width="12">
												<path fill-rule="evenodd"
													  d="M12 13c0 .59 0 1-.59 1H4.59C4 14 4 13.59 4 13c0-.59 0-1 .59-1h6.81c.59 0 .59.41.59 1H12zM4.59 4h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1H4.59C4 2 4 2.41 4 3c0 .59 0 1 .59 1zm6.81 3H4.59C4 7 4 7.41 4 8c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1zM2 1h-.72c-.3.19-.58.25-1.03.34V2H1v2.14H.16V5H3v-.86H2V1zm.25 8.13c-.17 0-.45.03-.66.06.53-.56 1.14-1.25 1.14-1.89C2.71 6.52 2.17 6 1.37 6c-.59 0-.97.2-1.38.64l.58.58c.19-.19.38-.38.64-.38.28 0 .48.16.48.52 0 .53-.77 1.2-1.7 2.06V10h3l-.09-.88h-.66l.01.01zm-.08 3.78v-.03c.44-.19.64-.47.64-.86 0-.7-.56-1.11-1.44-1.11-.48 0-.89.19-1.28.52l.55.64c.25-.2.44-.31.69-.31.27 0 .42.13.42.36 0 .27-.2.44-.86.44v.75c.83 0 .98.17.98.47 0 .25-.23.38-.58.38-.28 0-.56-.14-.81-.38l-.48.66c.3.36.77.56 1.41.56.83 0 1.53-.41 1.53-1.16 0-.5-.31-.81-.77-.94v.01z"/>
											</svg>
										</button>

										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-n"
												aria-label="Add a task list" data-prefix="- [ ] "
												data-toolbar-hotkey="L" data-multiline
												data-ga-click="Markdown Toolbar, click, task list"
												data-surround-with-newlines>
											<svg aria-hidden="true" class="octicon octicon-tasklist" height="16"
												 version="1.1" viewBox="0 0 16 16" width="16">
												<path fill-rule="evenodd"
													  d="M15.41 9H7.59C7 9 7 8.59 7 8c0-.59 0-1 .59-1h7.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM9.59 4C9 4 9 3.59 9 3c0-.59 0-1 .59-1h5.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1H9.59zM0 3.91l1.41-1.3L3 4.2 7.09 0 8.5 1.41 3 6.91l-3-3zM7.59 12h7.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1H7.59C7 14 7 13.59 7 13c0-.59 0-1 .59-1z"/>
											</svg>
										</button>
									</div>

									<div class="toolbar-group">

										<div
											class="toolbar-item select-menu select-menu-modal-right js-menu-container js-select-menu js-load-contents js-saved-reply-container"
											data-contents-url="/settings/replies">
											<button type="button" tabindex="-1"
													class="js-menu-target menu-target tooltipped tooltipped-nw"
													aria-label="Insert a saved reply"
													data-ga-click="Markdown Toolbar, click, saved reply">
												<svg aria-hidden="true" class="octicon octicon-reply" height="16"
													 version="1.1" viewBox="0 0 14 16" width="14">
													<path fill-rule="evenodd"
														  d="M6 3.5c3.92.44 8 3.125 8 10-2.312-5.062-4.75-6-8-6V11L.5 5.5 6 0v3.5z"/>
												</svg>
												<span class="dropdown-caret"></span>
											</button>

											<div
												class="select-menu-modal-holder js-menu-content js-navigation-container"
												aria-hidden="true">
												<div class="select-menu-modal">
													<div class="select-menu-header">
														<svg aria-label="Close"
															 class="octicon octicon-x js-menu-close" height="16"
															 role="img" version="1.1" viewBox="0 0 12 16"
															 width="12">
															<path fill-rule="evenodd"
																  d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/>
														</svg>
														<span class="select-menu-title">Select a saved reply</span>
													</div>
													<div class="js-select-menu-deferred-content"></div>
													<div class="select-menu-loading-overlay anim-pulse">
														<svg aria-hidden="true" class="octicon octicon-octoface"
															 height="32" version="1.1" viewBox="0 0 16 16"
															 width="32">
															<path fill-rule="evenodd"
																  d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/>
														</svg>
													</div>
												</div>
											</div>
										</div>

										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-nw"
												aria-label="Directly mention a user or team" data-prefix="@"
												data-prefix-space data-ga-click="Markdown Toolbar, click, mention">
											<svg aria-hidden="true" class="octicon octicon-mention" height="16"
												 version="1.1" viewBox="0 0 14 16" width="14">
												<path fill-rule="evenodd"
													  d="M6.58 15c1.25 0 2.52-.31 3.56-.94l-.42-.94c-.84.52-1.89.83-3.03.83-3.23 0-5.64-2.08-5.64-5.72 0-4.37 3.23-7.18 6.58-7.18 3.45 0 5.22 2.19 5.22 5.2 0 2.39-1.34 3.86-2.5 3.86-1.05 0-1.36-.73-1.05-2.19l.73-3.75H8.98l-.11.72c-.41-.63-.94-.83-1.56-.83-2.19 0-3.66 2.39-3.66 4.38 0 1.67.94 2.61 2.3 2.61.84 0 1.67-.53 2.3-1.25.11.94.94 1.45 1.98 1.45 1.67 0 3.77-1.67 3.77-5C14 2.61 11.59 0 7.83 0 3.66 0 0 3.33 0 8.33 0 12.71 2.92 15 6.58 15zm-.31-5c-.73 0-1.36-.52-1.36-1.67 0-1.45.94-3.22 2.41-3.22.52 0 .84.2 1.25.83l-.52 3.02c-.63.73-1.25 1.05-1.78 1.05V10z"/>
											</svg>
										</button>

										<button type="button" tabindex="-1"
												class="js-toolbar-item toolbar-item tooltipped tooltipped-nw"
												aria-label="Reference an issue or pull request" data-prefix="#"
												data-prefix-space
												data-ga-click="Markdown Toolbar, click, reference">
											<svg aria-hidden="true" class="octicon octicon-bookmark" height="16"
												 version="1.1" viewBox="0 0 10 16" width="10">
												<path fill-rule="evenodd"
													  d="M9 0H1C.27 0 0 .27 0 1v15l5-3.09L10 16V1c0-.73-.27-1-1-1zm-.78 4.25L6.36 5.61l.72 2.16c.06.22-.02.28-.2.17L5 6.6 3.12 7.94c-.19.11-.25.05-.2-.17l.72-2.16-1.86-1.36c-.17-.16-.14-.23.09-.23l2.3-.03.7-2.16h.25l.7 2.16 2.3.03c.23 0 .27.08.09.23h.01z"/>
											</svg>
										</button>
									</div>
								</div>-->
								<nav class="tabnav-tabs" role="tablist">
									<button type="button"
											class="btn-link tabnav-tab write-tab js-write-tab selected " role="tab"
											aria-selected="true">Introduction
									</button>
									<!--<button type="button" class="btn-link tabnav-tab preview-tab js-preview-tab "
											role="tab">Preview
									</button>-->
								</nav>
							</div>


							<div class="comment-form-error js-comment-form-error" style="display:none"> There was an
								error creating your Issue.
							</div>
							<div
								class="write-content js-write-bucket js-uploadable-container js-upload-markdown-image is-default upload-enabled"
								data-upload-policy-url="/upload/policies/assets"
								data-upload-policy-authenticity-token="A28x1fRavpTH6EC2+1BO7VgSIa6cpP6dOAn4EfujhVqju/N7fu+5e4fnt0ZWAFtjD1Y3DR/iTja/Jtvy0wv/BQ=="
								data-upload-repository-id="71317553"
							>
								<input type="hidden" name="saved_reply_id"
									   class="js-saved-reply-id js-resettable-field" value=""
									   data-reset-value="">

								<textarea name="race_textarea"
										  id="race_textarea"

										  placeholder="Write the introduction of your race"
										  aria-label="Comment body"
										  class="form-control input-contrast comment-form-textarea js-comment-field js-improved-comment-field js-task-list-field js-quick-submit js-size-to-fit js-suggester-field js-quote-selection-target js-session-resumable"
								></textarea>
								<!--	<p class="drag-and-drop">
	<span class="default">
		Attach files by dragging &amp; dropping,
		<input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser"
			   aria-label="Attach files to your comment">
		<span class="btn-link manual-file-chooser-text">selecting them</span>, or pasting
		from the clipboard.
	</span>
										<span class="loading">
	  <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16"/> Uploading your files…
	</span>
										<span class="error bad-file">
	  We don’t support that file type.
	  <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
	  <span class="drag-and-drop-error-info">
		<button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a
		PNG, GIF, JPG, DOCX, PPTX, XLSX, TXT, PDF, or ZIP.
	  </span>
	</span>
										<span class="error bad-permissions">
	  Attaching documents requires write permission to this repository.
	  <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
	  <span class="drag-and-drop-error-info">
		<button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a PNG, GIF, or JPG.
	  </span>
	</span>
										<span class="error repository-required">
	  We don’t support that file type.
	  <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
	  <span class="drag-and-drop-error-info">
		<button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a PNG, GIF, or JPG.
	  </span>
	</span>
										<span class="error too-big">
	  Yowza, that’s a big file.
	  <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
	  <span class="drag-and-drop-error-info">
		<button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a file smaller than 10MB.
	  </span>
	</span>
										<span class="error empty">
	  This file is empty.
	  <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
	  <span class="drag-and-drop-error-info">
		<button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a file that’s not empty.
	  </span>
	</span>
										<span class="error hidden-file">
	  This file is hidden.
	  <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
	  <span class="drag-and-drop-error-info">
		<button type="button" class="btn-link manual-file-chooser-text">Try again</button> with another file.
	  </span>
	</span>
										<span class="error failed-request">
	  Something went really wrong, and we can’t process that file.
	  <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
	  <span class="drag-and-drop-error-info">
		<button type="button" class="btn-link manual-file-chooser-text">Try again.</button>
	  </span>
	</span>
									</p>-->


								<div class="suggester-container">
									<div class="suggester js-suggester js-navigation-container"
										 data-url="/OptimusPrime1997/Healthier/suggestions/issue"
										 data-log-mention-url="/OptimusPrime1997/Healthier/suggestions/log_mention?repository_id=71317553"
										 data-log-mention-authenticity-token="DF51JRcUUKnTzxRJ3a4ohRnIMQQNnVm0tdbhjaBHX4CsireLnaFXRpPA47lw/j0LTownp47b6R8y+cJuiO8l3w=="
									>
									</div>
								</div>
							</div>

							<div class="preview-content">
								<div class="comment">
									<div class="comment-body markdown-body js-preview-body">
										<p>Nothing to preview</p>
									</div>
								</div>

							</div>

							<!--<div class="float-left">
								<a class="tabnav-extra"
								   href="https://guides.github.com/features/mastering-markdown/" target="_blank"
								   data-ga-click="Markdown Toolbar, click, help">
									<svg aria-hidden="true" class="octicon octicon-markdown v-align-bottom"
										 height="16" version="1.1" viewBox="0 0 16 16" width="16">
										<path fill-rule="evenodd"
											  d="M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z"/>
									</svg>
									Styling with Markdown is supported
								</a>
							</div>-->


							<div class="comment-form-error comment-form-bottom js-comment-update-error"></div>
						</div>


						<!--<div class="form-actions">
							<button type="submit" class="btn btn-primary" id="submit-btn" data-disable-invalid
									data-disable-with>
								Submit new share
							</button>
						</div>-->


						<!--<div>
							<label for="title" class="m_inline">Competition Type:</label>
							<div class="radio m_inline">
								<label><input type="radio" name="optradio">Individual</label>
							</div>
							<div class="radio m_inline">
								<label><input type="radio" name="optradio">Mutiplayer</label>
							</div>
						</div>-->
					</div>
				</div>

				<div class="blank10"></div>
				<div>
					<div>

						<div class="form-group">
							<div class="col-md-2 col-lg-2 ">
								<label for="title" class="control-label">Type:</label>
							</div>
							<div class="col-md-2 col-lg-2">
								<div class="radio">
									<label>
										<input type="radio" class="type-radio" name="optradio" value="STEP" checked/>STEP
									</label>
								</div>
							</div>
							<div class="col-md-2 col-lg-2">
								<div class="radio">
									<label>
										<input type="radio" class="type-radio" name="optradio" value="STEP"/>METER
									</label>
								</div>
							</div>
							<div class="col-md-2 col-lg-2">
								<div class="radio">
									<label>
										<input type="radio" class="type-radio" name="optradio" value="STEP"/>CALORY
									</label>
								</div>
							</div>
						</div>
						<script>
							$('.type-radio').click(function () {
								$('#form_race_type').attr('value', $(this).val());
							});
						</script>
					</div>


					<!--<div class="blank10"></div>

					<form>
						<div class="form-group" style="display:inline;">
							<label for="comment" style="display:inline;">Competition Introduction:</label>
							<textarea class="form-control " rows="3" id="comment"></textarea>
						</div>
					</form>-->
					<div class="blank10"></div>
					<p>
					<div class="m_inline">
						<div class="col-md-2 col-lg-2">
							<label for="time" class="m_inline">Time:</label>
						</div>
						<div class="col-md-3 col-lg-3">
							<!--<input type="text" class="form_control m_inline"
								   placeholder="2016-10-01 00:00:00">-->
							<div class="input-append date form_datetime m_left">
								<input id="start_time" size="16" type="text" value="" placeholder="2016-10-01 00:00:00"
									   readonly>
								<span class="add-on"><i class="icon-remove"></i></span>
								<span class="add-on"><i class="icon-calendar"></i></span>
							</div>
						</div>
						<div class="col-md-1 col-lg-1">
							<!--<input type="text" class="form_control m_inline"
								   placeholder="2016-10-01 00:00:00">-->
							<span>to</span>
						</div>
						<div class="col-md-3 col-lg-3">
							<!--<input
								type="text" class="form_control"
								placeholder="2016-10-02 00:00:00">-->
							<div class="input-append date form_datetime m_left">
								<input id="end_time" size="16" type="text" value="" placeholder="2016-10-01 00:00:00"
									   readonly>
								<span class="add-on"><i class="icon-remove"></i></span>
								<span class="add-on"><i class="icon-calendar"></i></span>
							</div>
						</div>
					</p>

					<!--<div class="input-append date form_datetime" data-date="2013-02-21T15:25:00Z">
						<input size="16" type="text" value="" readonly>
						<span class="add-on"><i class="icon-remove"></i></span>
						<span class="add-on"><i class="icon-calendar"></i></span>
					</div>-->

					<script type="text/javascript">
						$(".form_datetime").datetimepicker({
							format: "yyyy-mm-dd hh:ii:ss",
							autoclose: true,
							todayBtn: true,
							pickerPosition: "bottom-left"
						});
					</script>
					<div class="blank10"></div>
					<p>

					<div>
						<div class="col-md-2 col-lg-2">
							<label for="time" class="m_inline">Reward :</label>
						</div>
						<div class="col-md-3 col-lg-3">
							<input id="reward_input" type="text" class="form_control m_inline">
						</div>

					</p>
					<div class="blank10"></div>
					<p>
					<div class="btn-toolbar m_right" role="toolbar">
						<button class="btn btn-success m_inline " id="create_race">Create</button>
						<a class="m_margin-left5" href="<?php echo base_url("/controller_impl/r_createactivity_c"); ?>">
							<button class="btn btn-success m_margin-left5">Cancel</button>
						</a>
					</div>
					</p>
					<form action="<?php echo base_url("/controller_impl/r_createactivity_c/create");?>" type="hidden" id="race_hidden_from" method="post">
						<input id="form_race_name" type="hidden" name="race_name" value="">
						<input id="form_race_introduction" type="hidden" name="race_introduction" value="">
						<input id="form_race_type" type="hidden" name="race_type" value="">
						<input id="form_race_start" type="hidden" name="race_start" value="">
						<input id="form_race_end" type="hidden" name="race_end" value="">
						<input id="form_race_reward" type="hidden" name="race_reward" value="">
						<input id="form_submit" type="submit" class="hidden" >
					</form>
					<script>
						jQuery(function ($) {
							$('#create_race').click(function () {
								$('#form_race_name').attr('value', $('#issue_title').val());
								$('#form_race_introduction').attr('value', $('#race_textarea').val());
//								$('#form_race_type').attr('value',$('#issue_title').val());
								$('#form_race_start').attr('value', $('#start_time').val());
								$('#form_race_end').attr('value', $('#end_time').val());
								$('#form_race_reward').attr('value', $('#reward_input').val());
//								alert($('#form_race_reward').val()+'-');
								$('#form_submit').click();
							})
						});
					</script>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<?php
include "footer.php";
?>

</div>
</html>