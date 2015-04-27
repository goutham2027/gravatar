from hashlib import md5

def gravatar(email, size=48):
    digest = md5(email).hexdigest()
    url = "http://gravatar.com/avatar/%s?s=%s" % (digest,size)
    return url


print gravatar('goutham2027@gmail.com')
