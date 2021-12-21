<?php
/*
 *gestion du problème de redirection (double submit form)
 Post/Redirect/Get (PRG) is a web development design pattern that lets the page shown after a form submission be reloaded, shared, or bookmarked without ill effects, such as submitting the form another time.

When a web form is submitted to a server through an HTTP POST request, attempts to refresh the server response can cause the contents of the original POST to be resubmitted, possibly causing undesired results, such as a duplicate web purchase.[1] Some browsers mitigate this risk by warning the user that they are about to re-issue a POST request.

To avoid this problem, many web developers use the PRG pattern[2]—instead of responding with content, the server responds to a POST request by redirecting the client to another location. The HTTP 1.1 specification introduced the HTTP 303 ("See other") response code to ensure that in this situation, browsers can safely refresh the server response without causing the initial POST request to be resubmitted.

The PRG pattern cannot address every scenario of duplicate form submission. For example, if a web user refreshes before the initial submission completes, possibly because of server lag, a duplicate POST occurs in certain user agents.
https://en.wikipedia.org/wiki/Post/Redirect/Get
*/
header("Location: ..");