require 'digest/md5'

def gravatar email, size=48
  digest = Digest::MD5.hexdigest(email)
  "http://gravatar.com/avatar/#{digest}?s=#{size}"
end

puts gravatar 'goutham2027@gmail.com'
