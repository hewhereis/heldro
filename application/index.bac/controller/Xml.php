<?php
namespace app\index\controller;

class Xml
{
	public function feed(){
		return xml('<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"
			xmlns:content="http://purl.org/rss/1.0/modules/content/"
			xmlns:wfw="http://wellformedweb.org/CommentAPI/"
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:atom="http://www.w3.org/2005/Atom"
			xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
			xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
			>
			<channel>
				<title>Heldro IJs</title>
				<atom:link href="https://www.heldro.nl/feed/" rel="self" type="application/rss+xml" />
				<link>https://www.heldro.nl</link>
				<description>Het lekkerste ijs van Nederland</description>
				<lastBuildDate>Fri, 05 Oct 2018 14:21:42 +0000</lastBuildDate>
				<language>nl</language>
				<sy:updatePeriod>hourly</sy:updatePeriod>
				<sy:updateFrequency>1</sy:updateFrequency>
				<generator>https://wordpress.org/?v=4.9.8</generator>
			</channel>
		</rss>');
	}

	public function commentsFeed(){
		return xml('<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"
			xmlns:content="http://purl.org/rss/1.0/modules/content/"
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:atom="http://www.w3.org/2005/Atom"
			xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
			>
			<channel>
				<title>Reacties voor Heldro IJs</title>
				<atom:link href="https://www.heldro.nl/comments/feed/" rel="self" type="application/rss+xml" />
				<link>https://www.heldro.nl</link>
				<description>Het lekkerste ijs van Nederland</description>
				<lastBuildDate>Tue, 20 Nov 2018 05:37:24 +0000</lastBuildDate>
				<sy:updatePeriod>hourly</sy:updatePeriod>
				<sy:updateFrequency>1</sy:updateFrequency>
				<generator>https://wordpress.org/?v=4.9.8</generator>
			</channel>
		</rss>');
	}
}