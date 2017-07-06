# Jumpseat
Working simple jumpseat - this is only a way to set the pilots location this does not include the schedule booking part. I can provide that as a paid module, email me at info@ossenblok.media for information.

You can drag & drop this into your installation. The only thing you need to do is execute this query in your database:

ALTER TABLE phpvms_pilots ADD position VARCHAR(5)

if you're using another prefix please dont forget to change it when executing that query
