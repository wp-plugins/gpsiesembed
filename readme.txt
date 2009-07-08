=== GPSies Embed ===
Contributors: flavio alberti
Tags: google maps, gis, tracks, route, posts, gpssies, 
Requires at least: 2.5
Tested up to: 2.7.1
Stable tag: 0.1.1

Add GPSies Maps to your posts and pages.(Only for WordPress 2.5+)

== Description ==

Add GPSies Maps to your posts and pages.(Only for WordPress 2.5+)
This plugin allows you to easily insert GPSies Maps and Track Details into your blog.

This plugin is compliant with GPSies API (http://www.gpsies.com/api/GPSiesAPI_en.pdf)
and permits to embed the following maps into your blog.

1. Geocoordinate with perimeter
2. Bounding box (BBOX)
3. ZIP or city (with countrycode)
4. Username (optional with countrycode)
5. Parameter “fileId” (also several)
6. Search with countrycode and search text and/or username and/or client name
7. Traverse all tracks in a country

= Display Options: =

	show=details
	show=summary
	show=full

= Example for 1: Geocoordinate with perimeter: =
[gpsies lat=51&lon=10&perimeter=80&limit=20&trackTypes=jogging&filetype=kml&device=Run.GPS show=details]

= Example for 2: Bounding box (BBOX): =
[gpsies BBOX=10,51,12,53&limit=20&trackTypes=jogging&filetype=kml&device=Run.GPS show=summary]

= Example for 3: ZIP (with countrycode): =
[gpsies zip=12169&country=DE limit=20&trackTypes=jogging&filetype=kml&device=Run.GPS show=details]

= Example for 3: city (with countrycode): =
[gpsies city=berlin&country=DE&limit=20&trackTypes=jogging&filetype=kml&device=Run.GPS show=details]

= Example for 4: Username: =
[gpsies username=GPSies&limit=20&filetype=kml&device=Run.GPS show=details]

= Example for 4: Username (with countrycode): =
[gpsies username=GPSies&country=DE&limit=20&filetype=kml&device=Run.GPS show=full]

= Example for 5: Parameter „fileId“: =
[gpsies fileId=haublpggdenoekmb show=details]

= Example for 5: Parameter „fileId“ several: =
[gpsies fileId=haublpggdenoekmb&fileId=mniajyeljeaaambd show=details]

= Example for 6: Search in country by text and username: =
[gpsies searchText=test&country=DE&searchUsername=gpsies show=full]

= Example for 6: Search in country by text: =
[gpsies searchText=test&country=DE show=details]

= Example for 7: traverse all tracks in a country: =
[gpsies country=DE show=details]


= Localization =

If you have translated into your language, please let me know.

== Installation ==

1. Upload the entire `gpsiesEmbed` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add New Post or Edit Post, and insert the desired [gpsies ...] code

== Frequently Asked Questions ==

== Screenshots ==

