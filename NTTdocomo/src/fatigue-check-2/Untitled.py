import boto3

bucket_name = 'dc-s3-1'
s3 = boto3.resource('s3')
s3.Bucket(bucket_name).upload_file('/0/test.jpg', 'test.jpg')